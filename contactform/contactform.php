<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = 'De: '.$email."\r\n";
//$header .= "content-Type:text/plain";

$message = "Este message fue enviado por: ".$name."\r\n";
$message .= "Su correo es: ".$email."\r\n";
$message .= "El Asunto: ".$subject."\r\n";
$message .= "Mensaje: ".$_POST['message']."\r\n";
$message .= "Enviado el: ".date('d/m/Y',time());


$para = 'israel12verde@gmail.com';
$subject2 = 'Mensaje de mi web';

mail($para,$subject2,utf8_decode($message),$header);

 ?>