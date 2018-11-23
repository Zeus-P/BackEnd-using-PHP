<?php
    $myEmail = "abc@gmail.com";
    $myPass  = "12345678";
    
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if($email == $myEmail and $pass == $myPass){
            if(isset($_POST['remember'])){
                
                setcookie('email',$email,time()+60*60);
                setcookie('pass',$pass,time()+60*60);
            }
            session_start();
            $_SESSION['email'] = $_POST['email'];
            header('location:welcome.php');
            
        }
        else{
            echo "<script>alert('Not Registered User')</script>";
            echo "<a href='signup.php'>Sign Up?</a> Or You Can Login Through Another Email <a href='loginform.php'>LogIn?</a>";
        }
        
    }
    else
    {
        header("location:loginform.php");
        
    }
?>
