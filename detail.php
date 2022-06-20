<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
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

$ID = $_GET ['id'];


$result = mysqli_query($con, "SELECT * FROM news WHERE id=$ID");
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
     <label id="comment">comment : <br>
    <textarea name="comment"cols="50" rows="15" placeholder="leave a comment"></textarea>
    <input type="text" name="name" placeholder="your name" required><br>
    <button type="submit" name="sub_comm">submit</button>
</form>
    
</body>
</html>