<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <?php include("inc/header.inc.php") ?>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/images/icon.png">
    <script rel="https://cdnjs.cloudflare.com/ajax/libs/3.4.1/Jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<body>
<header>
    <div class="inner-width">
        <a href="#" class="logo.png" alt=""></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
            <a href="index.php"><i class="fas fa-home home"></i> Home</a>
            <a href="register.php"><i class="fas fa-align-left register"></i> Register</a>
            <a href="login.php"><i class="fab fa-buffer works"></i> Works</a>
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
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="s-m">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="info.php"><i class="fab fa-info"></i></a>
    <a href="https://www.youtube.com/channel/UCF9gZoOhtnuqajwjD55F0iA?view_as=subscriber"><i class="fab fa-youtube"></i></a>
    <a href="https://www.instagram.com/_teejan_19/?hl=de"><i class="fab fa-instagram"></i></a>
</div>
</body>
</html>
