<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New php</title>
        <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
        <script defer src="ajaxForm.js"></script>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <form id="sendingForm" action="send_mail.php" method="post">
            <input type="text" name="name" placeholder="Imię">
            <input type="email" name="email" placeholder="E-mail">
            <textarea name="message" placeholder="Wiadomość"></textarea>
            <button type="submit">Wyślij</button>
        </form>       
    </body>

     <?php 

    // class User{

    //     public $username;
    //     protected $email;

    //     public function __construct($username, $email){
    //         $this->username = $username;
    //         $this->email = $email;
    //     }
    //     public function __destruct(){
    //         echo "the user $this->username was removed<br>";
    //     }

    //     public function __clone(){
    //         $this->username = $this->username . '(cloned)<br>';
    //     }
        

    //     public function comunicate(){
    //         return $this->username . "</br>display my private data" . $this->email;
    //     }

    //     public function setEmail($email){
    //         if(strpos($email, "@")){
    //             $this->email = $email;
    //         }
    //     }

    //     public function message(){
    //         return "$this->email send a message";
    //     }
    // }

    // class AdminUser extends User{
    //     public function __construct($username, $email){
    //         parent::__construct($username, $email);
    //     }

    //     public function message(){
    //         return "$this->email send a message";
    //     }
    // }

    // class Weather{
    //     public static $tempConditions = ['cold', 'mild', 'warm'];

    //     public static function celsiusToFarenheit($c){
    //         return $c * 9/5+32;
    //     }

    //     public static function determineTempCondition($f){
    //         if($f<40){
    //             return self::$tempConditions[0];
    //         }else if($f < 70){
    //             return self::$tempConditions[1];
    //         }else{
    //             return self::$tempConditions[2];
    //         }
    //     }
    // } 

    // $weatherInstance = new Weather();

    // echo Weather::celsiusToFarenheit(30);

    // echo Weather::determineTempCondition(80);

    
    // $newClass = new User("Adrian", "kaczmarek");
    // $newClass2 = new User("Adrian2", "kaczmarek2");
    // $newClass3 = new AdminUser("Adrian3", "Kaczmarek@wp.pl");

    // $newClass4 = clone $newClass;
    // echo $newClass4->username;

    // echo $newClass->comunicate();
    // echo "</br>";
    // echo $newClass2->comunicate();
    // echo "</br>";
    // echo $newClass3->comunicate();
    // echo "</br>";
    // echo $newClass3->message();

    
   



    // echo "display class name: " . get_class($newClass);
    
    ?>
</html>
