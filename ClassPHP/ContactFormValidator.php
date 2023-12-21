<?php

class ContactFormValidator {
    private $errors = [];
    
    public function validate($name, $email, $message) {
        
        $this->errors = [];
        
        
       
        $this->validateName($name);
        $this->validateEmail($email);
        $this->validateMessage($message);
        
        $this->sendErrorToArray();
    
        return $this->errors;
    }
    
    
    private function validateName($name) {
        if (empty($name)) {
            $this->errors['name'] = 'Nie podałeś imienia i nazwiska!';
        }
    }
    
    private function validateEmail($email) {
        if (empty($email)) {
            $this->errors['email'] = "Nie podałeś maila, na który ma zostać wysłana odpowiedź!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Podany adres e-mail jest nieprawidłowy!";
        }
    }
    
    private function validateMessage($message) {
        if (empty($message)) {
            $this->errors['message'] = "Nie wysłałeś zapytania!";
        }
    }
    
    private function sendErrorToArray() {
        if (!empty($this->errors)) {
            http_response_code(400); 
            echo json_encode(["errors" => $this->errors]);
            exit;
        }
    }
}
