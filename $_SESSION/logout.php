<?php
    session_start();
unset($_SESSION['uname']); //For All SEssions : session_destroy();
header('location:login.php');
?>