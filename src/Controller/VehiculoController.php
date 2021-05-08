<?php

namespace App\Controller;

use App\Entity\Vehiculo;
use App\Entity\User;
use App\Form\VehiculoType;
use App\Repository\VehiculoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/vehiculo")
 */
class VehiculoController extends AbstractController
{
    /**
     * @Route("/", name="vehiculo_index", methods={"GET"})
     */
    public function index(VehiculoRepository $vehiculoRepository): Response
    {
        return $this->render('vehiculo/index.html.twig', [
            'vehiculos' => $vehiculoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="vehiculo_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $vehiculo = new Vehiculo();
        $form = $this->createForm(VehiculoType::class, $vehiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            // Modificar fecha_modificacion y propietario:
            $vehiculo->setFechaModificacion(new \DateTime());
            $vehiculo->setPropietario($this->getUser());
            $vehiculo->setEliminado(false);
            $vehiculo->setVenta(true);

            // Conseguir nombre email sin @gmail.com
            $nombreEmail = $this->getUser()->getEmail();
            $porciones = explode("@", $nombreEmail);
            $nombre = $porciones[0];

            // Código cargar imagen
            /** @var UploadedFile $img */
            $imgs = $form->get('images')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imgs) {
                $final = array();
                foreach($imgs as $img) {
                    $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'.'.$img->guessExtension();

                    // Move the file to the directory where img are stored
                    try {
                        $img->move(
                            'img/',
                            $newFilename
                        );
                    } catch (FileException $e) {
                        throw $e;
                    }

                    // Comprobar si $newFilename es nulo
                    if($newFilename != null || $newFilename != "undefined" || $newFilename != true || $newFilename != false) {
                        array_push($final, $newFilename);
                    }
                }

                // updates the 'img' property to store the PDF file name
                // instead of its contents
                $vehiculo->setImages($final);
            }

            $entityManager->persist($vehiculo);
            $entityManager->flush();

            return $this->redirectToRoute('perfil');
        }

        return $this->render('vehiculo/new.html.twig', [
            'vehiculo' => $vehiculo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vehiculo_show", methods={"GET"})
     */
    public function show(Vehiculo $vehiculo): Response
    {
        return $this->render('vehiculo/show.html.twig', [
            'vehiculo' => $vehiculo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="vehiculo_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Vehiculo $vehiculo): Response
    {
        $form = $this->createForm(VehiculoType::class, $vehiculo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vehiculo_index');
        }

        return $this->render('vehiculo/edit.html.twig', [
            'vehiculo' => $vehiculo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="vehiculo_delete", methods={"POST"})
     */
    public function delete(Request $request, Vehiculo $vehiculo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehiculo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($vehiculo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vehiculo_index');
    }
}
