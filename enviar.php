<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$colonia = $_POST['colonia'];
$edad= $_POST['edad'];
$asunto= $_POST['asunto'];



$header = 'From: ' . $mail . " \r\n";

$mensaje = "Este mensaje fue enviado por " . $nombre ." \r\n";
$mensaje .= "Su telefono es: " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su colonia es: " . $colonia . " \r\n";
$mensaje .= "La edad del niño es: " . $edad . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'informes@imaginadaycare.com.mx';


ini_set(sendmail_from,'informes@imaginadaycare.com.mx'); 
mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'http://www.imaginadaycare.com.mx/gracias.html';

?>