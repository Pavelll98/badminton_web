<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info.github.io';

$email_subject = "New Member Request";

$email_body = "Name: $name.\n".
                "Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";
             
$to = "vudu03@vse.cz";

$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body);

header("Location: contact.html")


?>