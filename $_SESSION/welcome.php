<h1>
<?php
    session_start();
    if(isset($_SESSION['uname']))
    echo "Welcome, ".$_SESSION['uname'];
    else
        echo"You are not Logged In";
    if(!isset($_SESSION['ps1'])){
        echo "<br>Another Session Is This Not Set";
    }
    echo "<br><br><br>";
    
?><a href="logout.php"><button>Log Out</button></a>
    </h1>