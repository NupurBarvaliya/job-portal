<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

if(isset($_POST['send'])){
print_r($_FILES);

$cpname = $_POST["cpname"];
$cpemail = $_POST['cpemail'];
$emname = $_POST["emname"];
$ememail = $_POST['ememail'];
$subject = $_POST['subject'];
$message = $_POST['message'];

    try {
       
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                 
        $mail->Username   = 'careerplusjobportal@gmail.com';                     
        $mail->Password   = 'pupyyrcfuzsedykz';                             
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
        $mail->Port       = 587;                                     
    
        
        $mail->setFrom('careerplusjobportal@gmail.com');
        $mail->addAddress('careerplusjobportal@gmail.com');   
                      
        
        
        if($_FILES['attachment']['name']!=null){
            if(move_uploaded_file($_FILES['attachment']['tmp_name'],"uploads/{$_FILES['attachment']['name']}")){
        $mail->addAttachment("uploads/{$_FILES['attachment']['name']}");    

            }
    
        }
           
    
        $mail->isHTML(true);
        $mail->Subject = 'Message Received From :'.$cpname;
        $mail->Body = "<h4>Company-Name : $cpname <br>company-Email: $cpemail <br><br> Employee-Name : $emname <br>employee-Email: $ememail <br><br>Subject: $subject <br><br>Message : $message</h4>";
        //$mail->isHTML(true);                                  
        //$mail->Subject = $subject;
        //$mail->Body    = $message;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();   
        echo '<script>window.location.href="empselection.php?message_sent";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
