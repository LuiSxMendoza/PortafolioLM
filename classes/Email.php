<?php

namespace Classes;

require_once '../includes/app.php';

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: /");
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

use Exception;
require_once '../vendor/autoload.php';

if (empty($nombre)) {
    sleep(2.5);
    header("Location: /");
    exit;
} if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
    sleep(2.5);
    header("Location: /");
    exit;
} if (empty($correo)) {
    sleep(2.5);
    header("Location: /");
    exit;
} if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    sleep(2.5);
    header("Location: /");
    exit;
} if (empty($mensaje)) {
    sleep(2.5);
    header("Location: /");
    exit;
} else {
    $mailer = new \SendGrid\Mail\Mail();
    $mailer->setFrom("juanluis123ar@gmail.com", "PortafolioLM.com");
    $mailer->setSubject("Contacto desde Portafolio");
    $mailer->addTo("juanluis123pit@gmail.com", 'Admin Portafolio');

    $mailer->addContent(
        "text/html", 
        "<p> <h1>¡Hola: Juan Luis!</h1>
                <h2> El Usuario: " . $nombre . " Te ha contactado. </h2>
                    <strong>
                        Visito tu Sitio Web y te dejo el
                        siguiente Mensaje: 
                    </strong>
            <p> ". $mensaje ." </p>  
            <p> Asi como el siguiente correo para ser contactado: <br> " . $correo ." </p>      
        </p>"
    );

    $apiKey = $_ENV['API_KEY'];
    $sg = new \SendGrid($apiKey);
    try {
        $sg->send($mailer);
        /*
        $response = $sg->send($mailer); 
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
        */
        sleep(3);
        header("Location: /");
        exit;
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}