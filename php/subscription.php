<?php
$email = $_POST['sub_email'];

$to = 'info@expeditionsconnect.com';
$subject = 'Expeditions Connect Subscription';
$message = 'Subscription Request Received From Expeditions Connect:<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
header( "Location: https://expeditionsconnect.com/index.html#subscriptionSuccess; refresh:5; url=http://www.expeditionsconnect.com" );
