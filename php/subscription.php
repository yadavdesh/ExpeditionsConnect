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
$subject1 = 'Thank you for Subscribing Expeditions Connect';
#$replymsg = 'Hello '.$email.'<br/><br/>';
#$replymsg .= 'Thank you for subscribing Expeditions Connect. We will inform you once we launch in your area. <br/><br/>';
#$replymsg  .= 'Best Regards<br/>';
#$replymsg  .= 'Expeditions Connect';
$replymsg =  file_get_contents('email.html');



mail($to,$subject,$message,$headers);
header( "Location: https://expeditionsconnect.com#subscriptionSuccess" );


#$replymsg = "Thank you for subscribing \"Expeditions Connect\". We will inform you once we launch in your area. ";
mail($email, $subject1, $replymsg, $headers1);