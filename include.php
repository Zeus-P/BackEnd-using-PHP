<?php include("toInclude.php"); ?> //or require at place of include.
<html>
    <head>
    <title>
        Include And require
        </title></head>
    <body>
    <?php
        echo "<h1> Addition is ".add(2,5)."</h1>";
        
        ?>
    
    
    
    </body>
</html>


/* When We Use require() then if there is even one error , it will be blocked entirely. Nothing Will be Shown excetpt Error. */
//include_once() and require_once() can be used to Include a file only once even if it's being included more than once.