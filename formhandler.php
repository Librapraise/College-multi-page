<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email-from = 'info@website.com';

$email-subject = 'New Form Submission';

$email-body = "User Name": $name.\n"
                "User Email": $vistor_email.\n"
                "subject": $subject.\n"
                "User message": $message.\n";


$to = 'alabipraise26@gmail.com';

$headers = "From: $email-from \r\n";

$headers .= "Reply-To: $vistor_email \r\n";

mail($to,$email-subject,$email-body,$headers);

header("Location: contact.html");









?>