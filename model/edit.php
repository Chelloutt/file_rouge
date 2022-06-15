<?php

 include('config.php');

 if (isset($_POST['update'])){


    $ID = $_POST['id'];
    $NAME = $_POST['title'];
    $AUTHOR = $_POST['author'];
    $CONTENT = htmlspecialchars($_POST['content']);
    $CATEGORY = $_POST['category'];
    $IMAGE = $_POST['image'];
    $DATE = $_POST['date'];

    /*$image_location = $_FILES ['image']['tmp_name'];
    $image_name = $_FILES ['image']['name'];
    $image_up = $image_name;

    if($image_up === "" ){
        $image_up = $_post['hide'];
    }*/
    $image_location = $_FILES ['image']['tmp_name'];
    $image_name = $_FILES ['image']['name'];
    if(count($_FILES)>0)
             $image_up = $image_name;
    else
            $image_up = 'test';//$_POST['hide'];

    $update = "UPDATE news SET `title`='$NAME',`content`='$CONTENT',`category`='$CATEGORY',`photo`='$image_up',`date`='$DATE',`author`='$AUTHOR' WHERE id=$ID";
     

    
    mysqli_query($con, $update);

    if(move_uploaded_file($image_location,'images/'. $image_name)){

        echo "<script> alert('post has benn uploded successfuly')</script>";
    }else{
        echo "<script> alert('something goes wrong, please try again')</script>";
    }
    header('location: admin.php');
 }


 





?>