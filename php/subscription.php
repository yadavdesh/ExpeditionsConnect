<?php
$email = $_POST['sub_email'];

$to = 'info@expeditionsconnect.com';
$to_user = $email
$subject = 'Expeditions Connect Subscription';
$sub_reply = 'Thank you for subscribing Expeditions Connect'

$message = 'Subscription Request Received From Expeditions Connect:<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';
$reply = 'Thank you for subscribing our page. We will contact you once we will launch'
$reply .= '<strong>Email : </strong>'.$email.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
mail($to_user,$sub_reply,$message);
header( "Location: https://expeditionsconnect.com/index.html#subscriptionSuccess" );

#echo "Thank you for subscribing our page" . " -" . "<a href='../index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";


#if (isset ($_POST['submit']))
#{
 #   if (mail($to,$subject,$message,$headers))
  #  {
   #     echo "Thank you for subscribing our page"; 
   # }
  #  else
  #  {
  #      echo "Failed to subscribe";
   # }
    

#}
