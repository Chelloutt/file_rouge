<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="index1.css">
 
    <title>SPORT | NEWS</title>
</head>
<body>

    <!-- START HEADER -->
    <header>
        <img id="logo" src="./assets/baya24.png">
        <ul>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="politics.php">Politics</a></li>
            <li><a href="art.php">Art</a></li>
            <li><a href="culture.php">Culture</a></li>
        </ul>
        <input type="text" id="srch" placeholder="search">

     <!-- END HEADER -->
    </header>

    <main>
        <center>
            <h1>SPORT</h1>
        </center>

        <div class="cards">
    <?php
    include ('./model/config.php');
    $result = mysqli_query($con, "SELECT * FROM news WHERE category='sport'");
    while ($row = mysqli_fetch_array($result)){
        echo"

        <div class='card' style='width: 18rem;'>
        <img class='card-img-top' src='./images/$row[photo]' >
        <div class='card-body'>
          <h5 class='card-title'>$row[title]</h5>
          <p class='card-text'>$row[date]</p>
          <p class='card-text'>$row[category]</p>
          <a href='detail.php?id=$row[id]' class='btn btn-primary'>read more</a>
        </div>
      </div>
        
        ";
      
    }
    ?>
</div>

    
    </main><br>
    <footer>
        <h1>Explore more about us</h1>
        <ul>
            <li>SPORT |</li>
            <li>POLITICS |</li>
            <li>ART |</li>
            <li>CULTURE</li>
        </ul>
        <hr>
        <center>
            <p>Copyright © 2022 . The Website is not responsible for the content of external sites. Read about our approach to external linking.</p>
        </center>
    </footer>
    
</body>
</html>