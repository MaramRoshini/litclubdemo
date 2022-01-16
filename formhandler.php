<?php
$name = $_POST['name'];
$visitoremail = $_POST['email'];
$message = $_POST['message'];
$email_from = 'info@litclubjntuh.com';

$email_subject = 'NEW FORM SUBMISSION';

$email_body = "User Name: $name.\n".
"User Email: $email.\n".
"User MESSAGE: $message.\n";
$to = 'maramroshini2002@gmail.com';
$headers = "$From: $email_from \r \n";
$headers = "$Reply-To: $visitoremail\r \n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact us.html")

?>