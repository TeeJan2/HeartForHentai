<?php ?>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <?php include("inc/header.inc.php") ?>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/images/icon.png">
    <script rel="https://cdnjs.cloudflare.com/ajax/libs/3.4.1/Jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
<header>
            <div class="inner-width">
                <a href="/" class="logo" alt=""><img src="images/logo.png"></img></a>
                <i class="menu-toggle-btn fas fa-bars"></i>
                <nav class="navigation-menu">
                    <a href="index.php"><i class="fas fa-home home"></i> Home</a>
                    <a href="register.php"><i class="fas fa-align-left register"></i> Register</a>
                    <a href="login.php"><i class="fab fa-buffer login"></i> Login</a>
                    <a href="team.php"><i class="fas fa-users team"></i> Team</a>
                    <a href="contact.php"><i class="fas fa-headset contact"></i> Contact</a>
                </nav>
            </div>
        </header>

<script type="text/javascript">
    $(".menu-toggle-btn".click(function(){
        $(this).toggleClass("fa-times");
        $(",navigation-menu").toggleClass("active")
    });
</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="images">
    <img onclick="changeimg(this)" src="images/fortnite/fortnite1.png" alt="">
    <img onclick="changeimg(this)" src="images/fortnite/fortnite2.png" alt="">
    <img onclick="changeimg(this)" src="images/fortnite/fortnite3.png" alt="">
    <img onclick="changeimg(this)" src="images/fortnite/fortnite2.png" alt="">
</div>

<div class="pre">
    <a onclick="this.parentElement.style.display='none'" class="ion-close"></a>
    <img id="p" src="images/fortnite/fortnite2.png" alt="">
</div>

<script type="text/javascript">
    function changeimg(image) {
        var p = document.getElementById("p");
        p.src = image.src;
        p.parentElement.style.display ="block";
    }



</script>

</body>
</html>
