<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Vehiculo;
use App\Entity\Respuesta;
use App\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\AvatarType;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     * @IsGranted("ROLE_USER")
     */
    public function index(): Response
    {
        // Usuario logueado
        $user = $this->getUser();

        // Conseguir los objetos de vehículos de la base de datos
        $vehicles = $this->getDoctrine()->getRepository(Vehiculo::class)->findAll();

        // Arrays de marcas y modelos
        $marcas = array();
        $modelos = array();
        foreach($vehicles as $vehicle) {
            array_push($marcas, $vehicle->getMarca());
            array_push($modelos, $vehicle->getModelo());
        }
        $marcas = array_unique($marcas);

        $modelos = array_unique($modelos);

        return $this->render('main/buscador.html.twig', [
            'controller_name' => 'MainController',
            'vehicles' => $vehicles,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'user' => $user
        ]);
    }

    /**
     * @Route("/buscador", name="buscador")
     * @IsGranted("ROLE_USER")
     */
    public function buscador(Request $request): Response
    {
        // Usuario logueado
        $user = $this->getUser();

        // Conseguir marcas y modelos sin repetir
        $vehiclesFiltro = $this->getDoctrine()->getRepository(Vehiculo::class)->findBy(array("marca" => $request->request->get('marcas'), "modelo" => $request->request->get('modelos')));
        
        $vehicles = $this->getDoctrine()->getRepository(Vehiculo::class)->findAll();
        // Arrays de marcas y modelos
        $marcas = array();
        $modelos = array();
        foreach($vehicles as $vehicle) {
            array_push($marcas, $vehicle->getMarca());
            array_push($modelos, $vehicle->getModelo());
        }
        $marcas = array_unique($marcas);

        $modelos = array_unique($modelos);

        return $this->render('main/buscador.html.twig', [
            'controller_name' => 'MainController',
            'vehicles' => $vehiclesFiltro,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'user' => $user
        ]);
    }

    /**
     * @Route("/perfil", name="perfil")
     * @IsGranted("ROLE_USER")
     */
    public function perfil(Request $request, SluggerInterface $slugger): Response
    {
        // Usuario logueado
        $user = $this->getUser();

        // Formulario
        $form = $this->createForm(AvatarType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();

            // Modificar fotoDni
            /** @var UploadedFile $avatar */
            $avatar = $form->get('avatar')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($avatar) {
                $originalFilename = pathinfo($avatar->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'.'.$avatar->guessExtension();

                // Move the file to the directory where avatar are stored
                try {
                    $avatar->move(
                        'avatar/',
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw $e;
                }

                // updates the 'avatar' property to store the PDF file name
                // instead of its contents
                $user->setAvatar($newFilename);
            }

            // ... persist the $user variable or any other work
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('perfil');
        }

        return $this->render('main/perfil.html.twig', [
            'avatarForm' => $form->createView(),
            'user' => $user
        ]);
    }
    
    /**
     * @Route("/modificar", name="modificar")
     * @IsGranted("ROLE_USER")
     */
    public function modificar(Request $request)
    { 
        $modificacion = $request->query->get('dato');
        $condicion = $request->query->get('condicion');
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        //Comprobacion de valor a modificar
        if($condicion == 'nombre') {
            $user->setNombre($modificacion);
        }else if($condicion == 'primerApellido') {
            $user->setPrimerApellido($modificacion);
        }else if($condicion == 'segundoApellido') {
            $user->setSegundoApellido($modificacion);
        }else if($condicion == 'nick') {
            $user->setNick($modificacion);
        }else if($condicion == 'localidad') {
            $user->setLocalidad($modificacion);
        }else if($condicion == 'provincia') {
            $user->setProvincia($modificacion);
        }else if($condicion == 'telefonoMovil') {
            $user->setTelefonoMovil($modificacion);
        }else {
            $condicion = "error";
        }

        $em->flush();

              
        return new Response($condicion);
    }
    
    /**
     * @Route("/message", name="message")
     * @IsGranted("ROLE_USER")
     */
    public function message(): Response
    {
        $id = $this->getUser()->getId();
        $messagesRecibidos = $this->getDoctrine()->getRepository(Message::class)->findBy(array('receptor' => $id));
        $messagesEnviados = $this->getDoctrine()->getRepository(Message::class)->findBy(array('emisor' => $id));

        return $this->render('main/bandejaCorreo.html.twig', [
            'messagesRecibidos' => $messagesRecibidos,
            'messagesEnviados' => $messagesEnviados
        ]);
    }

    /**
     * @Route("/messagesReportados", name="messagesReportados")
     * @IsGranted("ROLE_ADMIN")
     */
    public function messagesReportados(): Response
    {
        $messages = $this->getDoctrine()->getRepository(Message::class)->findAll();

        return $this->render('main/mensajesReportados.html.twig', [
            'messages' => $messages
        ]);
    }
    
    /**
     * @Route("/eliminarMensajeVehiculo", name="eliminarMensajeVehiculo")
     * @IsGranted("ROLE_USER")
     */
    public function eliminarMensajeVehiculo(Request $request): Response
    {
        $mensaje = $this->getDoctrine()->getRepository(Message::class)->find($request->query->get('mensaje'));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('vehiculo'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        $mensaje->setOculto(true);
        $vehiculo->setOculto(true);
        $em->flush();

              
        return new Response($resultado);
    }

    /**
     * @Route("/comprarVehiculo", name="comprarVehiculo")
     * @IsGranted("ROLE_USER")
     */
    public function comprarVehiculo(Request $request): Response
    {
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findBy(array('id' => $request->query->get('mensaje')));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('vehiculo'));
        $propietario = $this->getUser();
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        foreach($mensajes as $mensaje) {
            $mensaje->setOculto(true);
        }
        $vehiculo->setVenta(false);
        $vehiculo->setPropietario($propietario);
        $em->flush();

              
        return new Response($resultado);
    }
    
    /**
     * @Route("/eliminarVehiculoBuscador", name="eliminarVehiculoBuscador")
     * @IsGranted("ROLE_USER")
     */
    public function eliminarVehiculoBuscador(Request $request): Response
    {
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findBy(array('vehiculo' => $request->query->get('id_vehiculo')));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('id_vehiculo'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        foreach($mensajes as $mensaje) {
            $mensaje->setOculto(true);
        }
        $vehiculo->setOculto(true);
        $em->flush();

              
        return new Response($resultado);
    }
    
    /**
     * @Route("/addVehiculoBuscador", name="addVehiculoBuscador")
     * @IsGranted("ROLE_USER")
     */
    public function addVehiculoBuscador(Request $request): Response
    {
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findBy(array('vehiculo' => $request->query->get('id_vehiculo')));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('id_vehiculo'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        foreach($mensajes as $mensaje) {
            $mensaje->setOculto(false);
        }
        $vehiculo->setOculto(false);
        $vehiculo->setVenta(true);
        $em->flush();

              
        return new Response($resultado);
    }
    
    /**
     * @Route("/usuarios", name="usuarios")
     * @IsGranted("ROLE_ADMIN")
     */
    public function usuarios(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findAll();
        $mensajes_reportados = array();
        $vehiculos_reportados = array();

        foreach($mensajes as $mensaje) {
            if($mensaje->getReportado() == true) {
                array_push($mensajes_reportados, $mensaje);
            }

            $vehiculo_id = $mensaje->getVehiculo();
            $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($vehiculo_id);

            if($mensaje->getReportado() == true && $mensaje->getOculto() == true) {
                array_push($vehiculos_reportados, $vehiculo);
            }
        }

        return $this->render('main/mostrarUsuarios.html.twig', [
            'users' => $users,
            'mensajesReportados' => $mensajes_reportados,
            'vehiculosReportados' => $vehiculos_reportados
        ]);
    }

    /**
     * @Route("/exportarUsuarios", name="exportarUsuarios")
     * @IsGranted("ROLE_ADMIN")
     */
    public function exportarUsuarios(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $correos = [];
        foreach($users as $user) {
            $datos = "";

            // Comprobar si los datos son nulos o no
            if($user->getEmail() != null) {
                $datos .= "Email: ".$user->getEmail();
            }else {
                $datos .= "Email: null";
            }
            
            if($user->getPassword() != null) {
                $datos .= " - Password: ".$user->getPassword();
            }else {
                $datos .= " - Password: null";
            }

            if($user->getNombre() != null) {
                $datos .= " - Nombre: ".$user->getNombre();
            }else {
                $datos .= " - Nombre: null";
            }

            if($user->getPrimerApellido() != null) {
                $datos .= " - PrimerApellido: .".$user->getPrimerApellido();
            }else {
                $datos .= " - PrimerApellido: null";
            }

            if($user->getSegundoApellido() != null) {
                $datos .= " - SegundoApellido: ".$user->getSegundoApellido();
            }else {
                $datos .= " - SegundoApellido: null";
            }

            if($user->getNick() != null) {
                $datos .= " - Nick: ".$user->getNick();
            }else {
                $datos .= " - Nick: null";
            }

            if($user->getLocalidad() != null) {
                $datos .= " - Localidad: ".$user->getLocalidad();
            }else {
                $datos .= " - Localidad: null";
            }

            if($user->getProvincia() != null) {
                $datos .= " - Provincia: ".$user->getProvincia();
            }else {
                $datos .= " - Provincia: null";
            }

            if($user->getTelefonoMovil() != null) {
                $datos .= " - Teléfono Móvil: ".$user->getTelefonoMovil();
            }else {
                $datos .= " - Teléfono Móvil: null";
            }

            array_push($correos, $datos);
        }
        // Código para crear archivo CSV:
        $csv = 'correosUsuarios.csv';
        $file = fopen($csv, 'w');
        foreach($correos as $correo){
            fwrite($file, "$correo\n");
        }
        fclose($file);
        $f = fopen('../public/correosUsuarios.csv', 'r');
        $response = new Response(stream_get_contents($f));
        $response->headers->set('Content-Type', 'application/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$csv.'');
        fclose($f);
        return $response;
    }

    /**
     * @Route("/exportarMensajesReportados", name="exportarMensajesReportados")
     * @IsGranted("ROLE_ADMIN")
     */
    public function exportarMensajesReportados(): Response
    {
        // Mensajes
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findAll();
        $mensajes_reportados = array();

        foreach($mensajes as $mensaje) {
            if($mensaje->getReportado() == true) {
                array_push($mensajes_reportados, $mensaje);
            }
        }

        $correos = [];
        foreach($mensajes_reportados as $mensaje_reportado) {
            $datos = "";

            // Comprobar si los datos son nulos o no
            if($mensaje_reportado->getTexto() != null) {
                $datos .= "Texto: ".$mensaje_reportado->getTexto();
            }else {
                $datos .= "Texto: null";
            }
            
            if($mensaje_reportado->getFechaEnvio() != null) {
                $datos .= " - Fecha envío: ".$mensaje_reportado->getFechaEnvio()->format('Y-m-d H:i:s');
            }else {
                $datos .= " - Fecha envío: null";
            }

            foreach($mensaje_reportado->getRespuestas() as $respuesta) {
                if($respuesta->getTexto() != null) {
                    $datos .= " - Texto: ".$respuesta->getTexto();
                }else {
                    $datos .= " - Texto: null";
                }

                if($respuesta->getFecha() != null) {
                    $datos .= " - Fecha: ".$respuesta->getFecha()->format('Y-m-d H:i:s');
                }else {
                    $datos .= " - Fecha: null";
                }

                if($respuesta->getAutor() != null) {
                    $datos .= " - Autor: ".$respuesta->getAutor();
                }else {
                    $datos .= " - Autor: null";
                }
            }

            if($mensaje_reportado->getEmisor() != null) {
                $emisor = $this->getDoctrine()->getRepository(User::class)->find($mensaje_reportado->getEmisor());
                $datos .= " - Emisor: .".$emisor->getEmail();
            }else {
                $datos .= " - Emisor: null";
            }

            if($mensaje_reportado->getReceptor() != null) {
                $receptor = $this->getDoctrine()->getRepository(User::class)->find($mensaje_reportado->getReceptor());
                $datos .= " - Receptor: .".$receptor->getEmail();
            }else {
                $datos .= " - Receptor: null";
            }

            array_push($correos, $datos);
        }
        // Código para crear archivo CSV:
        $csv = 'mensajesReportados.csv';
        $file = fopen($csv, 'w');
        foreach($correos as $correo){
            fwrite($file, "$correo\n");
        }
        fclose($file);
        $f = fopen('../public/mensajesReportados.csv', 'r');
        $response = new Response(stream_get_contents($f));
        $response->headers->set('Content-Type', 'application/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$csv.'');
        fclose($f);
        return $response;
    }

    /**
     * @Route("/exportarVehiculosReportados", name="exportarVehiculosReportados")
     * @IsGranted("ROLE_ADMIN")
     */
    public function exportarVehiculosReportados(): Response
    {
        // Mensajes
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findAll();
        $mensajes_reportados = array();
        $vehiculos_reportados = array();

        foreach($mensajes as $mensaje) {
            if($mensaje->getReportado() == true) {
                array_push($mensajes_reportados, $mensaje);
            }

            $vehiculo_id = $mensaje->getVehiculo();
            $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($vehiculo_id);

            if($mensaje->getReportado() == true && $mensaje->getOculto() == true) {
                array_push($vehiculos_reportados, $vehiculo);
            }
        }

        $correos = [];
        foreach($vehiculos_reportados as $vehiculo_reportado) {
            $datos = "";

            // Comprobar si los datos son nulos o no
            if($vehiculo_reportado->getMarca() != null) {
                $datos .= "Marca: ".$vehiculo_reportado->getMarca();
            }else {
                $datos .= "Marca: null";
            }
            
            if($vehiculo_reportado->getModelo() != null) {
                $datos .= " - Modelo: ".$vehiculo_reportado->getModelo();
            }else {
                $datos .= " - Modelo: null";
            }

            if($vehiculo_reportado->getFechaModificacion() != null) {
                $datos .= " - Fecha última modificación: ".$vehiculo_reportado->getFechaModificacion()->format('Y-m-d H:i:s');
            }else {
                $datos .= " - Fecha última modificación: null";
            }

            if($vehiculo_reportado->getDescripcion() != null) {
                $datos .= " - Descripción: .".$vehiculo_reportado->getDescripcion();
            }else {
                $datos .= " - Descripción: null";
            }

            if($vehiculo_reportado->getPrecio() != null) {
                $datos .= " - Precio: ".$vehiculo_reportado->getPrecio();
            }else {
                $datos .= " - Precio: null";
            }

            if($vehiculo_reportado->getPropietario() != null) {
                $propietario = $this->getDoctrine()->getRepository(User::class)->find($vehiculo_reportado->getPropietario());
                $datos .= " - Propietario: .".$propietario->getEmail();
            }else {
                $datos .= " - Propietario: null";
            }

            array_push($correos, $datos);
        }
        // Código para crear archivo CSV:
        $csv = 'vehiculosReportados.csv';
        $file = fopen($csv, 'w');
        foreach($correos as $correo){
            fwrite($file, "$correo\n");
        }
        fclose($file);
        $f = fopen('../public/vehiculosReportados.csv', 'r');
        $response = new Response(stream_get_contents($f));
        $response->headers->set('Content-Type', 'application/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$csv.'');
        fclose($f);
        return $response;
    }
}
