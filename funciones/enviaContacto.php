<?php

include '../correo/class.phpmailer.php';
include '../correo/class.smtp.php';
include '../correo/utilerias.php';
include '../clases/correo.php';
$correo = new correo();
$utilierias = new utilerias();
$email = $_GET["email"];
$mensaje = $_GET["mensaje"];
if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
    $error = 1;
    echo json_encode($error);
} else {
    $correo->setDe($email);
    $correo->setMensaje($mensaje);
    $mail = new PHPMailer();
    $utilierias->enviarCorreoElectronico($correo, $mail);
    $valido = 2;
    echo json_encode($valido);
}
