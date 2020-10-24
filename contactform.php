<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone_number = $_POST['phone number'];
$message = $_POST['message'];

$email_from = 'DO-NOT-REPLY@macrostat.us';
$email_subject = "New Form Submission";
$email_body = "User Name : $name.\n".
"User Email: $visitor_email.\n".
"User Phone Number: $visitor_phone_number.\n".
"User Message: $message.\n";

$to = "nathan.yang16@gmail.com";
$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body, $headers);
header("Location: index.html");
?>