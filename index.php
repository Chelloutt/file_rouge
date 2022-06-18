<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleindex.css">
    <title>Home</title>
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


    <!-- START MAIN -->

    <main>
        <h1 id="greeting"></h1>
        <h1>Select your subject</h1>
        <div class="cards">
            <!-- CARD 1 -->
   <a href="sport.php">
        <div class="card card1">
            <div class="container">
                <img src="./images/sport.jpg">
            </div>
            <div class="details">
                <h3>SPORT</h3>
                <p>Follow latest sports news and events in every field ( Footabll , Basktball , tennis , Rugby...)</p>
                
            </div>
        </div>
    </a>

        <!-- CARD 2  -->
    <a href="politics.php">

        <div class="card card2">
            <div class="container">
                <img src="./images/politics.jpg">
            </div>
            <div class="details">
                <h3>POLITICS</h3>
                <p>Breaking news and analysis on U.S. politics, including the latest coverage of the White House, Congress, the Supreme Court and more.</p>
            </div>
        </div>
    </a>

        <!-- CARD 3 -->
    <a href="art.php">
        <div class="card card3">
            <div class="container">
                <img src="./images/art.jpg" >
            </div>
            <div class="details">
                <h3>ART</h3>
                <p>Find out what is driving the international art market around the clock with daily art world news, expert commentary, and event reviews.</p>
            </div>
        </div>
    </a>

        <!-- CARD 4 -->
    <a href="culture.php">
        <div class="card card4">
            <div class="container">
                <img src="./images/culture.jpg" alt="Singapore">
            </div>
            <div class="details">
                <h3>CULTURE</h3>
                <p>Explore collections and stories of cultural movements and current events in the world, including Hollywood controversies, artistic influences and more.</p>
            </div>
        </div>
    </a>
    </div>

    </main>


    <footer>
        <h1>Explore more about us</h1>
        <ul>
            <li>SPORT |</li>
            <li>POLITICS |</li>
            <li>ART |</li>
            <li>CULTURE</li>
        </ul><br>
        <hr><br>
        <center>
            <p>Copyright © 2022 . The Website is not responsible for the content of external sites. Read about our approach to external linking.</p>
        </center>
    </footer>


    <script src="main.js"></script>
</body>
</html>