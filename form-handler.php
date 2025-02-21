<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'ridhocta3@gmail.com'

$email_subject = "user name: $name.\n".
                  "user Email: $visitor_email.\n".
                  "subject: $subject.\n".
                  "user message: $message\n";

$to = 'ridhocta3@gmail.com';

$headers = "From: $email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html");













?>












