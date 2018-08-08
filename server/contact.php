<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'contact_config.php';
session_start();
error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$name = stripslashes($_POST['inputNombre']);
$email = trim($_POST['inputEmail']);
$phone = stripslashes($_POST['inputTelefono']);
$subject = "Correo de contacto Valparaiso Master Tour";
$message = "

Nombre: ".$_POST['inputNombre']
."

E-mail: ".$_POST['inputEmail']
."

Teléfono: ".$_POST['inputTelefono']
."

Mensaje: ".$_POST['inputMessage'];

    $mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());

if($mail)
{
echo 'OK';
}
else
{
echo '<div class="notification_error">Error al enviar el mensaje.</div>';
}

}
?>
