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
            <a href="imprint.php"><i class="fas fa-align-left Impresum"></i> Impresum</a>
            <a href="privancypolicy.php"><i class="fas fa-align-left Datenschutz"></i> Datenschuz</a>
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