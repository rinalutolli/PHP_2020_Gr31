<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer(true);
try {
  
    $mail->SMTPDebug = 2;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'senderr5000@gmail.com';                    
    $mail->Password   = 'sender123';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                   
   
    $mail->setFrom($email, $name);
    $mail->addAddress('reciever5000@gmail.com', ' User');     
    
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
} }?>