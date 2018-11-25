<?php
    $email_1 = 'ps.startz.666@gmail.com';
    $email_2 = 'priyanshu';

    if(filter_var($email_1 , FILTER_VALIDATE_EMAIL)){
        echo "Email Address '$email_1' is Considered Valid\n";
        
    }
    if(filter_var($email_2, FILTER_VALIDATE_EMAIL)){
        echo "The Email '$email_2' is valid";
    }
    else{
        echo "$email_2 is not Valid";
    }
?>