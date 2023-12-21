<?php

class DBConnection{
    
    public $mysqli;
    
    public function connectToDB($name,$email,$message) {
        $this->mysqli = new mysqli('localhost', 'root', '', 'formphp');

         //Sprawdzenie połączenia
        if ($this->mysqli->connect_error) {
            die('Connection failed: ' . $this->mysqli->connect_error);
        }       
                 $query = "INSERT INTO `formphp` (`nazwa_klienta`, `email_klienta`, `wiadomosc`) VALUES (?, ?, ?)";

        $result = $this->mysqli->prepare($query);

        $result->bind_param("sss", $name,$email,$message);

        $result->execute();

         $result->close();

}
    
}
