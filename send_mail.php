<?php
require_once 'Mailer.php';


$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
$sendMail = new Mailer();

$sendMail->send($name, $email, $message);
 
