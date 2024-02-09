<?php
$name = $_POST['name'];
$visitoremail = $_POST['email'];
$subject = $_POST['subject']; // Corrected variable name
$message = $_POST['message'];

$email_from = 'edusuccessaca@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "user name: $name.\n" . 
              "user email: $visitoremail.\n" . 
              "subject: $subject.\n" . // Corrected variable name
              "user message: $message.\n";

$to = 'edusuccessaca@gmail.com';
$headers = "From: $email_from \r\n"; // Using consistent variable name
$headers .= "Reply-To: $visitoremail \r\n"; // Using consistent variable name

mail($to, $email_subject, $email_body, $headers); // Using consistent variable names
header("location: contact.html");
?>
