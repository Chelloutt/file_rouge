<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>CULTURE | NEWS</title>
</head>
<body>

    <!-- START HEADER -->
    <header>
        <img src="./assets/baya24.png">
        <ul>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="">Politics</a></li>
            <li><a href="">Art</a></li>
            <li><a href="">Culture</a></li>
        </ul>
        <input type="text" id="srch" placeholder="search">

     <!-- END HEADER -->
    </header>
    <main>
        <center>
            <h1>CULTURE</h1>
        </center>

    <?php
    include ('./model/config.php');
    $result = mysqli_query($con, "SELECT * FROM news WHERE category='culture'");
    while ($row = mysqli_fetch_array($result)){
        echo"

        <div class='card' style='width: 50rem;'>
        <img class='card-img-top' src='./images/$row[photo]' style='width : 200px'>
        <div class='card-body'>
          <h5 class='card-title'>$row[title]</h5>
          <a href='#' class='btn btn-primary'>Read More</a>
        </div>
      </div>
        
        ";
      
    }
    ?>
    </main>
</body>
</html>