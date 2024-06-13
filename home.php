<?php
session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowna</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="./js/main.js"></script>
</head>

<body>
    <nav class="nav">
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#" class="close-btn"></li>
            <li><a href="katalog.php" class="list-item">Katalog</a></li>
            <li><a href="#" class="list-item">O nas</a></li>
            <li><a href="#" class="list-item">Kontakt</a></li>
        </ul>
        <ul class="list-items">
            <li><a href="home.php" class="list-item"><img src="img/bg/logo.png" alt=""></a></li>
            <li><a href="katalog.php" class="list-item hide-on-mobile">Katalog</a></li>
            <li><a href="#" class="list-item hide-on-mobile">#######</a></li>
            <li><a href="#" class="list-item hide-on-mobile">#######</a></li>
            <li class="menu-btn" onclick="showSidebar()"><a href="#" class="list-item">Chowaj/pokazuj</a></li>
        </ul>
    </nav>

    <main class="hero-bg" id="home">
        <div class="hero-text">
            <h1>Komis Samochodowy </h1>
            <p>Twoje marzenia na czterech kołach</p>
            <div class="underline"></div>
            <a href="#about" class="chevron-down"></a>
        </div>

    </main>
    <footer class="footer">

     
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-instagram"><img src="img/sociale/twit.png" "</i></a>
            <a href="#"><i class="fa-brands fa-facebook"><img src="img/sociale/fb.png" alt=""></i></a>
            <a href="#"><i class="fa-brands fa-youtube"><img src="img/sociale/yt.png" alt=""></i></a>
            <a href="#"><i class="fa-brands fa-youtube"><img src="img/sociale/blip.png" alt=""></i></a>
            <a href="#"><i class="fa-brands fa-youtube"><img src="img/sociale/link.png" alt=""></i></a>
            <a href="#"><i class="fa-brands fa-youtube"><img src="img/sociale/what.png" alt=""></i></a>
            <a href="#"><i class="fa-brands fa-youtube"><img src="img/sociale/skype.png" alt=""></i></a>
            <a href="#"><i class="fa-brands fa-youtube"><img src="img/sociale/pint.png" alt=""></i></a>
        </div>
        <div class="footer-nav">
            <ul class="list-items">
                <li><a href="#" class="list-item">Regulamin</a></li>
                <li><a href="#" class="list-item">Rozrywka</a></li>
                <li><a href="katalog.php" class="list-item">Katalog</a></li>
                <li><a href="#" class="list-item">O nas</a></li>
                <li><a href="#" class="list-item">Umowa</a></li>
                <li><a href="#" class="list-item">Pomoc</a></li>
            </ul>
        </div>
        
    </footer>

</body>

</html>