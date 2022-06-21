<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail1.css">
    <title>Detail</title>
</head>
<body>

<header>
        
        <ul>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="">Politics</a></li>
            <li><a href="">Art</a></li>
            <li><a href="">Culture</a></li>
        </ul>
        <input type="text" id="srch" placeholder="search">
       

     <!-- END HEADER -->
    </header>

<?php
include ('./model/config.php');

$id = $_GET ['id'];


$result = mysqli_query($con, "SELECT * FROM news WHERE id=$id");
while ($row = mysqli_fetch_array($result)){
    echo"

    <h1>$row[title]</h1>
    <p>$row[date]</p>
    <p>Author : $row[author]</p>
    <h3>$row[category]</h3>
    <img id'photo' src='./images/$row[photo]'>
    <div class='content'>
    <h3>$row[content]</h3>
    </div>
    ";
}




?>
<hr><br>

<form action="./model/insert.php" method="POST">
     <label id="comment">  comment : <br>
    <textarea name="comment"cols="50" rows="15" placeholder="leave a comment"></textarea><br>
    <input type="text" name="name" placeholder="your name" required id="commenter"><br>
    <button type="submit" name="sub_comm">submit</button>
</form>

<div class="comments_section"><h1>what people say about that</h1>

<?php
include ('./model/config.php');

// $ID = $_GET ['id_news'];
$result = mysqli_query($con, "SELECT * FROM comments WHERE id_news=$id");
while ($row = mysqli_fetch_array($result)){
    echo "
    <h2>$row[name]</h2><span>$row[date]</span>
    <p>$row[comment]</p> <hr>
    ";
}
?>
</div>


    
</body>
</html>