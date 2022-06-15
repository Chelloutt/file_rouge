<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>UPDATE</title>
</head>
<body>

    <main>

    <?php
    include('config.php');
    $ID = $_GET ['id'];
    $up = mysqli_query($con, "SELECT * FROM news WHERE id=$ID");
    $get_data = mysqli_fetch_array($up);
    ?>

    <h3>update post</h3>
        <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="forms">
            
            
            <label id="title">
            ID :<br><input name="id" type="text" value="<?php echo $get_data['id']?>" required><br>
            Title :<br><input name="title" type="text" value="<?php echo $get_data['title']?>" required>

            
            <label id="author"><br>
            author :<br><input name="author" type="text" value="<?php echo $get_data['author']?>" required>

            <label id="content"><br>
            content :<br><textarea  name="content" id="content" cols="70" rows="25"><?php echo $get_data['content']?></textarea><br>

             <input list="category" name="category" value="<?php echo $get_data['category']?>" required>
                <datalist id="categoy">
                    <option value="Sport">
                    <option value="Art">
                    <option value="Politics">
                    <option value="Culture">
                </datalist>

            <label id="photo"><br>
            photo :<br><input name="image" type="file" >

            <input type="hidden" name="hide" id ="hide" value="<?php echo $get_data['photo']?>">
            

            <label id="date"><br>
            date :<br><input name="date" type="date" value="<?php echo $get_data['date']?>"><br>

            <button name="update" type="submit">UPDATE</button> <br>

            


            
        </label>

        </div>
        </form>
    </main>









</body>
</html>