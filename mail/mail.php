<?php
    $to = "shahanarif31@gmail.com";
    $subject = "Welcome to Arid";
    $message = "Hi ABC, You are welcome to Join Arid University."; 
    // Setting Headers
    $headers = "From: info@tesitng.com \r\n Reply-To: info@testing.com "  ; 
    // Sending email 
    if(mail($to, $subject, $message,$headers)){
    echo 'Your mail has been sent successfully.';
    } else{
    echo 'Unable to send email. Please try again.';
    }
    ?>
