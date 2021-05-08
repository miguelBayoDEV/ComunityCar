<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Vehiculo;
use App\Entity\User;
use App\Form\MessageType;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/message")
 */
class MessageController extends AbstractController
{
    /**
     * @Route("/", name="message_index", methods={"GET"})
     */
    public function index(MessageRepository $messageRepository): Response
    {
        return $this->render('message/index.html.twig', [
            'messages' => $messageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{receptor}&{emisor}&{id}&{vehiculo}", name="message_new", methods={"GET","POST"})
     */
    public function new(Request $request, $receptor, $emisor, $id, $vehiculo): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            
            $entityManager = $this->getDoctrine()->getManager();

            // Modificar datos de la entidad message:
            $emisor = $this->getDoctrine()->getRepository(User::class)->find($emisor);
            $message->setEmisor($emisor->getId());
            $receptor = $this->getDoctrine()->getRepository(User::class)->find($receptor);
            $message->setReceptor($receptor->getId());
            $message->setFechaEnvio(new \DateTime());
            $message->setFechaLectura(new \DateTime());
            $message->setReportado(false);
            $message->setUser($emisor);
            $message->setOculto(false);
            $message->setLeido(false);
            $message->setVehiculoMessage($this->getDoctrine()->getRepository(Vehiculo::class)->find($vehiculo));
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('main');
        }

        return $this->render('message/new.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="message_show", methods={"GET"})
     */
    public function show(Message $message, $id): Response
    {
        $message = $this->getDoctrine()->getRepository(Message::class)->find($id);
        return $this->render('main/respuestasCorreo.html.twig', [
            'message' => $message
        ]);
    }

    /**
     * @Route("/{id}/edit", name="message_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Message $message): Response
    {
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('message_index');
        }

        return $this->render('message/edit.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="message_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Message $message): Response
    {
        if ($this->isCsrfTokenValid('delete'.$message->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('message_index');
    }
}