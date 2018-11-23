<?php
    $value = "Priyanshu";
    $exp = time()+5;
    setcookie("name2",$value,$exp);
    
    echo $_COOKIE['name2'];
    
    $unsetcookie = time() - 86400;

    //setcookie("name2","",$unsetcookie);

?>