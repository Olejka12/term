<?php

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'phpmailer/src/Exception.php';
   require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ua', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('info@fls.guru','Ваш клієнт!');
$mail->addAddress('artistnniga@gmail.com');
$mail->Subject = "Hi!"

$body = '<h1>Letter!</h1>';

if(trim(!empty($_POST['product_id']))){
  $body.='<p><strong>Name:</strong> '.$_POST['product_id'].'</p>';
}
if(trim(!empty($_POST['name']))){
  $body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['email']))){
  $body.='<p><strong>Name:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['phone']))){
  $body.='<p><strong>Phone:</strong> '.$_POST['phone'].'</p>';
}



if(!$mail->send()){
  $message = 'Error';
}else {
  $message = 'Send!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);

?>
