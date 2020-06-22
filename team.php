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
        <title>team section</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div> class="team-section"
        <h1>Our Team</h1>
       <div class="ps">
           <a href="#images/Teams/TeeJan"><img src="images/Teams/TeeJan.png" alt=""></a>
           <a href="#images/Teams/TntTastich"><img src="images/Teams/TntTastich.png" alt=""></a>
       </div>

        <div class="section" id="TeeJan">
            <span class="name">TeeJan</span>
            <span class="border"></span>
            <p>
           TeeJan Entwickler
            </p>
        </div>

        <div class="section" id="TeeJan">
            <span class="name">TntTastich</span>
            <span class="border"></span>
            <p>
           TntTastich Entwickler
            </p>
        </div>
    </div>
    </body>
</html>