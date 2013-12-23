<?php

$mensaje = "<h1>Bienvenido $nombre $apellidoP $apellidoM</h1>  <br> 
            Tu Usuario es : $usuario <br>
            Tu password para tu acceso es : $pass<br>
            <h2>Recuerda que los datos que proporcionaste no van a ser accedidos por personas
            ajenas a tí</h2><br>
            <h1>  Exito en este curso</h1>";
$de = "shanaxchornos@gmail.com";
$para = $correo; //$_GET["email"];
$asunto = "Contraseña";
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$cabeceras .= "From: $de \r\n";
////Trabajando con PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->IsHTML = true;
$mail->SMTPAuth = true; //Autentificacion de SMTP
$mail->SMTPSecure = "ssl"; //SSL socket layer
$mail->Host = "smtp.gmail.com"; //Servidor de SMTP 
$mail->Port = 465; // 465
$mail->From = $de; //Remitente (En mi variable)
$mail->AddAddress($para); //Destinatario
$mail->Username = "shanaxchornos@gmail.com";
$mail->Password = "catscagats"; //Aqui va la contraseña valida de tu correo
$mail->Subject = $asunto; //El asunto de correo
$mail->Body = $pass; //$mensaje; //El mensaje de correo
$mail->WordWrap = 50; //# de columnas
$mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato HTML
echo $respuesta;
?>