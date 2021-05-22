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
            if($vehicle->getEliminado() == false && $vehicle->getVenta() == true) {
                array_push($marcas, $vehicle->getMarca());
                array_push($modelos, $vehicle->getModelo());
            }
        }
        $marcas = array_unique($marcas);

        $modelos = array_unique($modelos);

        // Paginación
        $v = array();
        foreach($vehicles as $vehicle) {
            if($vehicle->getEliminado() == false && $vehicle->getVenta() == true) {
                array_push($v, $vehicle);
            }
        }

        // Coger solo los primeros 10 coches
        $v10 = array_slice($v, 0, 10);
        

        $total = round(count($v) / 10);

        return $this->render('main/buscador.html.twig', [
            'controller_name' => 'MainController',
            'vehicles' => $v10,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'user' => $user,
            'contadorTotal' => $total
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
            if($vehicle->getEliminado() == false) {
                array_push($marcas, $vehicle->getMarca());
                array_push($modelos, $vehicle->getModelo());
            }
        }
        $marcas = array_unique($marcas);

        $modelos = array_unique($modelos);

        // Paginación
        $v = array();
        foreach($vehiclesFiltro as $vehicle) {
            if($vehicle->getEliminado() == false && $vehicle->getVenta() == true) {
                array_push($v, $vehicle);
            }
        }

        // Coger solo los primeros 10 coches
        $v10 = array_slice($v, 0, 10);

        $total = round(count($v) / 10);

        return $this->render('main/buscador.html.twig', [
            'controller_name' => 'MainController',
            'vehicles' => $v10,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'user' => $user,
            'contadorTotal' => $total
        ]);
    }

    /**
     * @Route("/page/{contador}", name="page")
     * @IsGranted("ROLE_USER")
     */
    public function page($contador): Response
    {
        // Usuario logueado
        $user = $this->getUser();

        $vehicles = $this->getDoctrine()->getRepository(Vehiculo::class)->findAll();
        // Arrays de marcas y modelos
        $marcas = array();
        $modelos = array();
        foreach($vehicles as $vehicle) {
            if($vehicle->getEliminado() == false) {
                array_push($marcas, $vehicle->getMarca());
                array_push($modelos, $vehicle->getModelo());
            }
        }
        $marcas = array_unique($marcas);

        $modelos = array_unique($modelos);

        // Paginación
        $v = array();
        foreach($vehicles as $vehicle) {
            if($vehicle->getEliminado() == false && $vehicle->getVenta() == true) {
                array_push($v, $vehicle);
            }
        }

        // Vehículos a enseñar
        $v10 = array();

        $total = round(count($v) / 10);

        // Condicionales de paginación
        if($contador == "first") {
            $v10 = array_slice($v, 0, 10);
        }else if($contador == "last") {
            if(count($v)/10 == 0) {
                $limite = count($v);
                $v10 = array_slice($v, $limite-10, $limite);
            }else {
                $limite = count($v);
                $convertir = strval($limite);
                $penultimo = strlen($convertir)-1;
                $ultimo = strlen($convertir);
                $lastNumber = substr($convertir, $penultimo, $ultimo);
                if($lastNumber == "1") {
                    $limite = count($v)-1;
                }else if($lastNumber == "2") {
                    $limite = count($v)-2;
                }else if($lastNumber == "3") {
                    $limite = count($v)-3; 
                }else if($lastNumber == "4") {
                    $limite = count($v)-4;
                }else if($lastNumber == "5") {
                    $limite = count($v)-5;
                }else if($lastNumber == "6") {
                    $limite = count($v)-6;
                }else if($lastNumber == "7") {
                    $limite = count($v)-7;
                }else if($lastNumber == "8") {
                    $limite = count($v)-8;
                }else if($lastNumber == "9") {
                    $limite = count($v)-9;
                }
                $v10 = array_slice($v, $limite, $limite+10);
            }
            
        }else {
            $limite = $contador*10;
            $v10 = array_slice($v, $limite, $limite+10);
        }

        return $this->render('main/buscador.html.twig', [
            'controller_name' => 'MainController',
            'vehicles' => $v10,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'user' => $user,
            'contadorTotal' => $total
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
     * @Route("/anime", name="anime")
     * @IsGranted("ROLE_USER")
     */
    public function anime(Request $request, SluggerInterface $slugger): Response
    {
        return $this->render('main/anime.html.twig');
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

        $em->persist($user);
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
     * @Route("/messageVisto/{id}", name="messageVisto")
     * @IsGranted("ROLE_USER")
     */
    public function messageVisto($id): Response
    {
        $message = $this->getDoctrine()->getRepository(Message::class)->find($id);

        // Comprobar si el mensaje está leido o no
        $entityManager = $this->getDoctrine()->getManager();
        if($message->getVisto() == false) {
            $message->setVisto(true);
        }
        $entityManager->persist($message);
        $entityManager->flush();

        return $this->render('main/respuestasCorreo.html.twig', [
            'message' => $message
        ]);
    }

    /**
     * @Route("/messagesReportados", name="messagesReportados")
     * @IsGranted("ROLE_ADMIN")
     */
    public function messagesReportados(): Response
    {
        $messages = $this->getDoctrine()->getRepository(Message::class)->findAll();
        $id = $this->getUser()->getId();
        $messagesRecibidos = $this->getDoctrine()->getRepository(Message::class)->findBy(array('receptor' => $id));
        $messagesEnviados = $this->getDoctrine()->getRepository(Message::class)->findBy(array('emisor' => $id));

        return $this->render('main/mensajesReportados.html.twig', [
            'messages' => $messages,
            'messagesRecibidos' => $messagesRecibidos,
            'messagesEnviados' => $messagesEnviados
        ]);
    }
    
    /**
     * @Route("/eliminarMensajeVehiculo", name="eliminarMensajeVehiculo")
     * @IsGranted("ROLE_ADMIN")
     */
    public function eliminarMensajeVehiculo(Request $request): Response
    {
        $mensaje = $this->getDoctrine()->getRepository(Message::class)->find($request->query->get('mensaje'));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('vehiculo'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        $mensaje->setOculto(true);
        $vehiculo->setEliminado(true);
        $em->flush();

              
        return new Response($resultado);
    }

    /**
     * @Route("/reportarMensajeVehiculo", name="reportarMensajeVehiculo")
     * @IsGranted("ROLE_USER")
     */
    public function reportarMensajeVehiculo(Request $request): Response
    {
        $mensaje = $this->getDoctrine()->getRepository(Message::class)->find($request->query->get('mensaje'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        $mensaje->setReportado(true);
        $mensaje->setOculto(true);
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
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findBy(array('vehiculoMessage' => $request->query->get('id_vehiculo')));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('id_vehiculo'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        foreach($mensajes as $mensaje) {
            $mensaje->setOculto(true);
        }
        $vehiculo->setVenta(false);
        $em->flush();

              
        return new Response($resultado);
    }
    
    /**
     * @Route("/addVehiculoBuscador", name="addVehiculoBuscador")
     * @IsGranted("ROLE_USER")
     */
    public function addVehiculoBuscador(Request $request): Response
    {
        $mensajes = $this->getDoctrine()->getRepository(Message::class)->findBy(array('vehiculoMessage' => $request->query->get('id_vehiculo')));
        $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($request->query->get('id_vehiculo'));
        $resultado = "1";

        $em = $this->getDoctrine()->getManager();
        foreach($mensajes as $mensaje) {
            $mensaje->setOculto(false);
        }
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

            $vehiculo_id = $mensaje->getVehiculoMessage()->getId();
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

        // Valores predeterminados
        $valores = "Email,Nombre,Primer apellido,Segundo apellido,Nick,Localidad,Provincia,Teléfono móvil,";
        array_push($correos, $valores);
        
        foreach($users as $user) {
            $datos = "";
            // Comprobar si los datos son nulos o no
            if($user->getEmail() != null) {
                $datos .= $user->getEmail().",";
            }else {
                $datos .= "null,";
            }

            if($user->getNombre() != null) {
                $datos .= $user->getNombre().",";
            }else {
                $datos .= "null,";
            }

            if($user->getPrimerApellido() != null) {
                $datos .= $user->getPrimerApellido().",";
            }else {
                $datos .= "null,";
            }

            if($user->getSegundoApellido() != null) {
                $datos .= $user->getSegundoApellido().",";
            }else {
                $datos .= "null,";
            }

            if($user->getNick() != null) {
                $datos .= $user->getNick().",";
            }else {
                $datos .= "null,";
            }

            if($user->getLocalidad() != null) {
                $datos .= $user->getLocalidad().",";
            }else {
                $datos .= "null,";
            }

            if($user->getProvincia() != null) {
                $datos .= $user->getProvincia().",";
            }else {
                $datos .= "null,";
            }

            if($user->getTelefonoMovil() != null) {
                $datos .= $user->getTelefonoMovil().",";
            }else {
                $datos .= "null,";
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

        // Valores predeterminados
        $valores = "Texto,Fecha envío,Emisor,Receptor,Respuestas,";
        array_push($correos, $valores);

        foreach($mensajes_reportados as $mensaje_reportado) {
            $datos = "";

            // Comprobar si los datos son nulos o no
            if($mensaje_reportado->getTexto() != null) {
                $datos .= $mensaje_reportado->getTexto().",";
            }else {
                $datos .= "null,";
            }
            
            if($mensaje_reportado->getFechaEnvio() != null) {
                $datos .= $mensaje_reportado->getFechaEnvio()->format('Y-m-d H:i:s').",";
            }else {
                $datos .= "null,";
            }

            if($mensaje_reportado->getEmisor() != null) {
                $emisor = $this->getDoctrine()->getRepository(User::class)->find($mensaje_reportado->getEmisor());
                $datos .= $emisor->getEmail().",";
            }else {
                $datos .= "null,";
            }

            if($mensaje_reportado->getReceptor() != null) {
                $receptor = $this->getDoctrine()->getRepository(User::class)->find($mensaje_reportado->getReceptor());
                $datos .= $receptor->getEmail().",";
            }else {
                $datos .= "null,";
            }

            // String para coger todas las respuestas:
            $r = "";
            foreach($mensaje_reportado->getRespuestas() as $respuesta) {

                if($respuesta->getId() != null) {
                    $r .= $respuesta->getId()." - ";
                }else {
                    $r .= "null,";
                }
                
                if($respuesta->getTexto() != null) {
                    $r .= $respuesta->getTexto()." (";
                }else {
                    $r .= "null,";
                }

                if($respuesta->getFecha() != null) {
                    $r .= $respuesta->getFecha()->format('Y-m-d H:i:s')." - ";
                }else {
                    $r .= "null,";
                }

                if($respuesta->getAutor() != null) {
                    $r .= $respuesta->getAutor().") | ";
                }else {
                    $r .= "null,";
                }
            }
            $datos .= $r;

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

            $vehiculo_id = $mensaje->getVehiculoMessage()->getId();
            $vehiculo = $this->getDoctrine()->getRepository(Vehiculo::class)->find($vehiculo_id);

            if($mensaje->getReportado() == true && $mensaje->getOculto() == true) {
                array_push($vehiculos_reportados, $vehiculo);
            }

        }

        $correos = [];
        $valores = "Marca,Modelo,Fecha última modificación,Descripción,Precio,Propietario,";
        array_push($correos, $valores);

        foreach($vehiculos_reportados as $vehiculo_reportado) {
            $datos = "";

            // Comprobar si los datos son nulos o no
            if($vehiculo_reportado->getMarca() != null) {
                $datos .= $vehiculo_reportado->getMarca().",";
            }else {
                $datos .= "null,";
            }
            
            if($vehiculo_reportado->getModelo() != null) {
                $datos .= $vehiculo_reportado->getModelo().",";
            }else {
                $datos .= "null,";
            }

            if($vehiculo_reportado->getFechaModificacion() != null) {
                $datos .= $vehiculo_reportado->getFechaModificacion()->format('Y-m-d H:i:s').",";
            }else {
                $datos .= "null,";
            }

            if($vehiculo_reportado->getDescripcion() != null) {
                $datos .= $vehiculo_reportado->getDescripcion().",";
            }else {
                $datos .= "null,";
            }

            if($vehiculo_reportado->getPrecio() != null) {
                $datos .= $vehiculo_reportado->getPrecio().",";
            }else {
                $datos .= "null,";
            }

            if($vehiculo_reportado->getPropietario() != null) {
                $propietario = $this->getDoctrine()->getRepository(User::class)->find($vehiculo_reportado->getPropietario());
                $datos .= $propietario->getEmail().",";
            }else {
                $datos .= "null,";
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
