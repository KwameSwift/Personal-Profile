<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$form_content="From: $name \n Message: $message";
$recipient = "fuakyeakyempim.charles@gmail.com";
$subject = "Contact Form";
$mail_header = "From: $email \r\n";
mail($recipient, $subject, $form_content, $mail_header) or die("Error!");
echo "Thank You!";

?>