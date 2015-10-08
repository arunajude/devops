<?php
$mymail = 'support@mfdevops.com';
$name   = strip_tags($_POST['txt_name']);
$email  = strip_tags($_POST['txt_email']);

$price  = strip_tags($_POST['txt_price']);
$phone = strip_tags($_POST['txt_phone']);
$coment = strip_tags($_POST['txt_comment']);
$to     = $mymail;
$email_subject  = "Contact form submission by:". $name;
$email_body     = "You have received a new message. ";
$email_body    .= " Here are the details:\n Name:".$name;
$email_body    .= "Email:".$email."\n Price:".$price."\n Phone:".$phone."\n Comments:".$coment;

$headers  = "From: $mymail \r\n";
$headers .= "Reply-To: $email \r\n" .

mail($to,$email_subject,$email_body,$headers);
echo "1";

?>
