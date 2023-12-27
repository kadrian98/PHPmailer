<?php


class SanitizeInputs {
    
    public $name;
    public $email;
    public $message;
    
    public function __construct(){
        $this->name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $this->email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $this->message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    }
}
