<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require (dirname(__FILE__).'/PHPMailer/src/Exception.php');

/* The main PHPMailer class. */
require (dirname(__FILE__).'/PHPMailer/src/PHPMailer.php');

/* SMTP class, needed if you want to use SMTP. */
require (dirname(__FILE__).'/PHPMailer/src/SMTP.php');
//Load Composer's autoloader
class Mail{

    public static function sendMail($to){
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            //Enable verbose debug output
            $mail->isSMTP(); 
            $mail->Mailer = "smtp";                                      //Send using SMTP
            $mail->Host       = 'server.cloudcone.email';                //Set the SMTP server to send through
            $mail->SMTPAuth   = true;   
            $mail->SMTPSecure = "tls";                                  //Enable SMTP authentication
            $mail->Username   = 'dev@surfedge.lk';                      //SMTP username
            $mail->Password   = '@9BqV6C@gyxnDyS';                      //SMTP password                                  
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('dev@surfedge.lk');
            $mail->addAddress($to);     //Add a recipient
            
        
            //Attachments
     
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message   body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        } 
    }

}