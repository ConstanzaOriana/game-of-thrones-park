<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['textarea'];

$destinatario = "cotyoriana95@gmail.com";
$asunto = "Nuevo mensaje de contacto";
$mensajeMail = "
<h1>Nuevo mensaje de contacto</h1>
<p>Nombre: $nombre</p>
<p>Email: $email</p>
<p>Mensaje: $mensaje</p>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From: $email" . "\r\n";

mail($destinatario, $asunto, $mensajeMail, $headers);

header("Location:exito.html");


?>