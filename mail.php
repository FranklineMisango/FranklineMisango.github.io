<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'
require 'phpmailer/src/PHPMailer.php'
require 'phpmailer/src/SMTP.php'

if (isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'franklinemisango4@gmail.com';
    $mail ->Password = "frankmisango"
    $mail ->SMTPSecure = 'ssl';
    $mail -> Port = 465;
    $mail -> setFrom('franklinemisango4@gmail.com');
    $mail -> <addAddress($_POST["email"]);
    $mail ->Message = $_POST["Name"];
    $mail ->Message = $_POST["Email"];
    $mail ->Message = $_POST["Phone"];
    $mail ->Message = $_POST["Subject"];
    $mail ->Message = $_POST["Message"];
    $mail ->send();

    echo 
    "
    <script>
    alert('Your Message has been sent successfully');
    document.location.href = index.html;
    </script>
    
    "






}
?>