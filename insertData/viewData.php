<?php
    $con = mysqli_connect('localhost','root','','insertdb');
    
    function showData(){
        global $con;
        $query="SELECT * FROM `userdata`";
        $run = mysqli_query($con,$query);
        if($run == TRUE){
        ?>
<table border="3" width="80%">
    <tr><th>Name</th><th>Email</th></tr>
<?php
            while($data = mysqli_fetch_assoc($run)){
            ?>
    <tr><td><?php echo $data['name']; ?></td><td><?php echo $data['email']; ?></td></tr>
    <?php
            
        }
            ?>
</table><?php
        }
        else
            echo "Error!";
    }
?>

<html>
<body>
    <?php
    showData();
    ?>
    </body></html>