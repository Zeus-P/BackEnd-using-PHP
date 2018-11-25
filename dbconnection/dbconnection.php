<?php
    $conn = mysqli_connect('localhost','root','','phpProject');
    if($conn){
        echo "Connection Established.";
    }
    else{
        echo "Error! Connection.";
    }
?>