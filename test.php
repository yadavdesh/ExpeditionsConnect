<?php
   $to = “info@expeditionsconnect.com“; // <– replace with your address here
   $subject = “Test mail”;
   $message = “Hello! This is a simple test email message.”;
   $from = “subscription@expeditionsconnect.com“;
   $headers = “From:” . $from;
   mail($to,$subject,$message,$headers);
   echo “Mail Sent.”;
?>