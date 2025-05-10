<?php
$to = "casamurani145@gmail.com";
$subject = "New Contact Form Submission";
$message = "Name: " . $_POST['name'] . "\n";
$message .= "Email: " . $_POST['email'] . "\n";
$message .= "Message: " . $_POST['message'];
$headers = "From: " . $_POST['email'];

mail($to, $subject, $message, $headers);
echo "Email sent successfully!";
?>