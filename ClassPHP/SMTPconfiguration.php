<?php

class SMTPconfiguration {
    public $host;
    public $user;
    public $pass;
    public $port;
    
    public function __construct() {
        $this->host = filter_var($_ENV['SMTP_HOST'], FILTER_SANITIZE_URL);
        $this->user = filter_var($_ENV['SMTP_USER'], FILTER_SANITIZE_EMAIL);
        $this->pass = $_ENV['SMTP_PASS'];
        $this->port = filter_var($_ENV['SMTP_PORT'], FILTER_VALIDATE_INT);
    }
}
