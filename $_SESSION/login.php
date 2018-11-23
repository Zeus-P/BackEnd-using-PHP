<?php
    
    session_start();
    if(isset($_SESSION["uname"])){
        echo "<h1 align='center'>You Are Already Logged In</h1>";
    exit();
    }

?>
<html>
<body>
    <form method="post">
        <div style="margin-top:300" align="center">
    User Name : <input type="text" name="username" placeholder="Enter Username" required>
        <br>
    passWord : <input type="password" name = "password" required>
        <br>
        <input type="submit" name="submit">
            
        </div>
        
    </form></body></html>
<?php
    if(isset($_POST['submit'])){
    $_SESSION['uname'] = $_POST['username'];
    header('location:welcome.php');
    }
?>
