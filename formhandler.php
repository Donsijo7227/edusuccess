<?php
$name=$_POST['name'];
$visitoremail=$_POST['email'];
$visitoremail=$_POST['subject'];
$message=$_POST['message'];

$email_from ='edusuccessaca@gmail.com';
$email_subject ='New Form Submission';
$email_body = "user name: $name.\n". 
               "user email: $visitoremail.\n". 
               "subject: $subject.\n". 
               "user message: $message.\n";

$to = 'edusuccessaca@gmail.com';
$header = "From : $email_from \r\n";
$headers .="reply-to :$visitoremail \r\n";

mail($to,$emailsubject,$emailbody,$headers);
header("location:contact.html");



?>