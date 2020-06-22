<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
$userid = $_SESSION['userid'];

?>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
        <?php include("inc/header.inc.php") ?>
        <link rel="stylesheet" href="style.css">
        <script rel="https://cdnjs.cloudflare.com/ajax/libs/3.4.1/Jquery.min.js" charset="UTF-8"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <body>
        <header>
            <div class="inner-width">
                <a href="#" class="logo.png" alt=""></a>
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
<html>
<head>
    <meta charset="utf-8">
    <title>Text Typing Effect</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="text">

</div>

<script type="text/javascript">
    var i = 0,text;
    text = "Welcome To HentaiForLife.com"

    function typing() {
        if(i<text.length){
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing,80);
        }
    }
    typing();
</script>


</body>
</html>

