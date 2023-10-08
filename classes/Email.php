<?php

namespace Classes;

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: index.php");
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

use Exception;
require_once '../vendor/autoload.php';
include_once '../includes/app.php';

if (empty($nombre)) {
    sleep(2);
    header("Location: ../index.php");
    exit;
} if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
    sleep(2);
    header("Location: ../index.php");
    exit;
} if (empty($correo)) {
    sleep(2);
    header("Location: ../index.php");
    exit;
} if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    sleep(2);
    header("Location: ../index.php");
    exit;
} if (empty($mensaje)) {
    sleep(2);
    header("Location: ../index.php");
    exit;
} else {
    $mailer = new \SendGrid\Mail\Mail();
    $mailer->setFrom("juanluis123ar@gmail.com", "PortafolioLM.com");
    $mailer->setSubject("Contacto desde Portafolio");
    $mailer->addTo("juanluis123pit@gmail.com", 'Admin Portafolio');

    $mailer->addContent(
        "text/html", 
        "<p> 
            <strong><h1>¡Hola: Juan Luis!</h1> <br>
                <h2>El Usuario:  " . $nombre . "</h2> <br>
                Te ha contactado desde tu Pagina Web y te ha dejado el
                siguiente mensaje: <br><br> <b> ". $mensaje ." </b> <br><br>
                Asi como el siguiente correo para ser contactado:  <br><br>
                " . $correo ." 
            </strong>
        </p>"
    );

    $apiKey = $_ENV['API_KEY'];
    $sg = new \SendGrid($apiKey);
    try {
        $sg->send($mailer);
        /*
        $response =  
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
        */
        sleep(5);
        header("Location: ../index.php");
        exit;
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}