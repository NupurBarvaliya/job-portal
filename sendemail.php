<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'careerplusjobportal@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'pupyyrcfuzsedykz'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('careerplusjobportal@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('careerplusjobportal@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received From Contact:'.$name;
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
<style>
.alert-success{
  z-index: 1;
  background: #D4EDDA;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;
}

.alert-error{
  z-index: 1;
  background: #FFF3CD;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #FFA502;
  border-radius: 4px;
}
</style>
