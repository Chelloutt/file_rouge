<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>View Posts</title>
</head>
<body>
<center><h1>SPORT</h1></center>

<div class="cards">
<?php
    include ('config.php');
    $result = mysqli_query($con, "SELECT * FROM news WHERE category='sport'");
    while ($row = mysqli_fetch_array($result)){
        echo"

        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='./images/$row[photo]' >
        <div class='card-body'>
          <h5 class='card-title'>$row[title]</h5>
          <p class='card-text'>$row[date]</p>
          <a href='delete.php?  id=$row[id]' class='btn btn-danger'>DELETE</a>
          <a href='update.php?  id=$row[id]' class='btn btn-success'>UPDATE</a>
        </div>
      </div>
        
        ";
      
    }
    
    ?>
    </div><br>
   
    <center><h1>POLITICS</h1></center>
    <div class="cards">
    <?php
    
    $result = mysqli_query($con, "SELECT * FROM news WHERE category='politics'");
    while ($row = mysqli_fetch_array($result)){
        echo"

        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='./images/$row[photo]' >
        <div class='card-body'>
          <h5 class='card-title'>$row[title]</h5>
          <p class='card-text'>$row[date]</p>
          <a href='delete.php?  id=$row[id]' class='btn btn-danger'>DELETE</a>
          <a href='update.php?  id=$row[id]' class='btn btn-success'>UPDATE</a>
        </div>
      </div>
        
        ";
      
    }
    
    ?>
    </div>
   <br>

<center><h1>ART</h1></center>
<div class="cards">
    <?php
    
    $result = mysqli_query($con, "SELECT * FROM news WHERE category='art'");
    while ($row = mysqli_fetch_array($result)){
        echo"

        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='./images/$row[photo]' >
        <div class='card-body'>
          <h5 class='card-title'>$row[title]</h5>
          <p class='card-text'>$row[date]</p>
          <a href='delete.php?  id=$row[id]' class='btn btn-danger'>DELETE</a>
          <a href='update.php?  id=$row[id]' class='btn btn-success'>UPDATE</a>
        </div>
      </div>
        
        ";
      
    }
    
    ?>
    </div><br>

<center><h1>CULTURE</h1></center>
<div class="cards">
    <?php
    
    $result = mysqli_query($con, "SELECT * FROM news WHERE category='culture'");
    while ($row = mysqli_fetch_array($result)){
        echo"

        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='./images/$row[photo]' >
        <div class='card-body'>
          <h5 class='card-title'>$row[title]</h5>
          <p class='card-text'>$row[date]</p>
          <a href='delete.php? id=$row[id]' class='btn btn-danger'>DELETE</a>
          <a href='update.php?  id=$row[id]' class='btn btn-success'>UPDATE</a>
        </div>
      </div>
        
        ";
       
      
    }
   
    ?>
    </div>
  
    
</body>
</html>