<?php
if (isset($_POST['submit'])) {
require 'phpmailer/class.phpmailer.php';
require 'PHPMailerAutoload.php';
require 'phpmailer/class.smtp.php';
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->isHTML(true);
$mail->SMTPDebug = false;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';                            // Set mailer to use SMTP                       // Enable SMTP authentication
$mail->Username = 'dirlbec7@gmail.com';                 // SMTP username
$mail->Password = '45295160';                           // SMTP password                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('dirlbec7@gmail.com');
$mail->AddAddress('acaciop7@uchicago.edu');     // Add a recipient
$mail->Subject = 'New WWL Inquiry!';
$mail->Body = 'Name: '.$_POST['name'].'<br />
Email: '.$_POST['email'].'<br />
Message: '.$_POST['message'].'';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if (!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Thank you for your interest! We will contact you shortly!";
}
}
?>
