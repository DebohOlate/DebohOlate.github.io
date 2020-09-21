<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$opinion=$_POST['opinion'];
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'deborariveraolate@gmail.com';
$asunto = 'Contacto de tu sitio Web';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?>