<h3>
<?php
echo "Host Name : ".$_SERVER['HTTP_HOST']."<br/>";
echo "Browser Details : ".$_SERVER['HTTP_USER_AGENT']."<br/>";
echo "File Name : ".$_SERVER['PHP_SELF']."<BR/>";
echo "Port No : ".$_SERVER['SERVER_PORT']."<BR/>";
echo "IP Address Of User : ".$_SERVER['REMOTE_ADDR']."<BR/>";
echo "Server Name : ".$_SERVER['SERVER_NAME']."<BR/>";

?>
    </h3>