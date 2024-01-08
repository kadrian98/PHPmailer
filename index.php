<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New php</title>
        <link rel="stylesheet" href="css/style.css"/>
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
</html>
