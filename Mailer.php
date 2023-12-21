<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'phpmailer/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once './ClassPHP/SMTPconfiguration.php';
require_once './ClassPHP/ContactFormValidator.php';
require_once './ClassPHP/DBConnection.php';

class Mailer {
    
    private SMTPconfiguration $smptconfig; 
    private ContactFormValidator $validator;
    private DBConnection $dbconnect;

    public function __construct() {
        $this->smptconfig = new SMTPconfiguration();
        $this->validator = new ContactFormValidator();
        $this->dbconnect = new DBConnection();
    }
            
    public function send($name, $email, $message) {
        
        $this->validator->validate($name, $email, $message);
        $mail = new PHPMailer(true);
              
        try {            
            // Konfiguracja serwera SMTP
            $mail->isSMTP();
            $mail->Host = $this->smptconfig->host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->smptconfig->user;
            $mail->Password = $this->smptconfig->pass;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = $this->smptconfig->port;

            // Odbiorcy
            $mail->setFrom('k_adrian@wp.pl', 'Klient');
            $mail->addAddress('kaczmarbejbi@gmail.com');
            $mail->addReplyTo($email);
            // Treść
            $mail->isHTML(true);
            $mail->Subject = 'Nowa wiadomość od ' . $name;
            $mail->Body    = 'Wiadomość: ' . $message;

            $mail->send();
            echo json_encode(["message" => "Message has been sent"]); 
            
            $this->dbconnect->connectToDB($name, $email, $message);
            
        } catch (Exception $e) {
            echo json_encode(["error" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    }
}

