<?php

 include('config.php');

 if (isset($_POST['submit'])){

    $NAME = $_POST['title'];
    $AUTHOR = $_POST['author'];
    $CONTENT = htmlspecialchars($_POST['content']);
    $CATEGORY = $_POST['category'];
    $IMAGE = $_POST['image'];
    $DATE = $_POST['date'];

    $image_location = $_FILES ['image']['tmp_name'];
    $image_name = $_FILES ['image']['name'];
    $image_up = $image_name;

    $insert = "INSERT INTO `news`(`id`, `title`, `content`, `category`,  `photo`, `date`, `author`) VALUES ('value-1','$NAME','$CONTENT', '$CATEGORY','$image_up','$DATE','$AUTHOR')";
     

    
    mysqli_query($con, $insert);

    if(move_uploaded_file($image_location,'./images/'. $image_name)){

        echo "<script> alert('post has benn uploded successfuly')</script>";
    }else{
        echo "<script> alert('something goes wrong, please try again')</script>";
    }
    header('location: admin.php');
 }


 





?>