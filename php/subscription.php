<?php
$email = $_POST['sub_email'];

$to = 'info@expeditionsconnect.com';
$subject = 'Expeditions Connect Subscription';
$message = 'Subscription Request Received From Expeditions Connect:<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

$headers1 = "MIME-Version: 1.0" . "\r\n";
$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers1 .= 'From: <'.$to.'>' . "\r\n";

mail($to,$subject,$message,$headers);
header( "Location: https://expeditionsconnect.com#subscriptionSuccess" );


$replymsg = "Thank you for subscribing \"Expeditions Connect\". We will inform you once we launch in your area. ";
mail($email, $subject, $replymsg, $headers1);