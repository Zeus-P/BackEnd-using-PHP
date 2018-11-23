<?php

echo "<pre>";
    print_r($_FILES['photo']);
echo "</pre>";
echo "<h1>".$_FILES['photo']['name']."</h1><br>";
echo "<h1>".$_FILES['photo']['size']."</h1><br>";
?>