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
    public function new(Request $request): Response
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
            $vehiculo->setOculto(false);
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
