<?php
$email = $_POST['sub_email'];

$to = 'yadavdesh@gmail.com';
$subject = 'Expeditions Connect Subscription';

$message = 'Subscription Request Received From Expeditions Connect:<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

if (isset ($_POST['submit']))
{
    if (mail($to,$subject,$message,$headers))
    {
        echo "Thank you for subscribing our page"; 
    }
    else
    {
        echo "Failed to subscribe";
    }
    

}
