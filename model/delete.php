<?php
include ('config.php');

 echo $ID = $_GET ['id'];

 mysqli_query($con, "DELETE FROM news WHERE id= $ID");
 header('location:posts.php')
?>