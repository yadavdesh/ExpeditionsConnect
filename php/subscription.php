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
header( "Location: https://expeditionsconnect.com/index.html#subscriptionSuccess" . $_SERVER['HTTP_REFERER'] );

#autoemail to customer

   $autoemail = new mail(); 
   $autoemail->From = "info@expeditionsconnect.com"; 
   $autoemail->FromName = "expeditionsconnect.com"; 
   $autoemail->AddAddress($mail->From, $mail->FromName); 
   $autoemail->Subject = "Thank you for Expeditions Connect signup"; 
   $autoemail->Body = "Thank you for signup. We will contact you once we launch:";
   $autoemail->Send(); 
   
  
?>