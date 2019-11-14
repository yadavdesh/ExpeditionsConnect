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
$replymsg = '
<html> 
    <head> 
        <title>Welcome to Expeditions Connect</title> 
    </head> 
    <body> 
    <div style="width: 80%; margin: auto; background-color:rgb(198, 210, 243); text-align: center;">
        <img src="www.expeditionsconnect/images/logo/logo.png">
        <h1 style="color: #3a63c2">Welcome to Expeditions Connect</h1>
        <h3>Thanks you for joining with us!</h3> 
        <p>We have not launched yet in your country. 
        We will update your once we will be available in your area.
        </p> 
        <p> 
        Please follow us on our social media platform to be update about new news from us.
        </p>
        <div class="socialfooter">
            <a href="https://www.facebook.com/expeditionsconnect/" class="fac"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/ExpeditionsC" class="twi"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/expeditionsconnects/" class="insta"><i class="fa fa-instagram"></i></a>
        </div>
        </br>
        </br>
        <div>
            <h4 style="color: #3a63c2">Best Regards,</h4>
            <h5 style="color: #3a63c2"> Expeditions Connect</h5>
            <h5 style="color: #3a63c2">www.expeditionsconnect.com</h5>
        </div>
    </div>
    </body> 
    </html>'; 



mail($to,$subject,$message,$headers);
header( "Location: https://expeditionsconnect.com#subscriptionSuccess" );


#$replymsg = "Thank you for subscribing \"Expeditions Connect\". We will inform you once we launch in your area. ";
mail($email, $subject1, $replymsg, $headers1);