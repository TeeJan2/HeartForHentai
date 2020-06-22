<?php include("inc/header.inc.php") ?>
<?php
session_start();
session_destroy();

header("Location: /")
?>
<html lang="de" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <?php include("inc/header.inc.php") ?>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/images/icon.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form class="box" action="login.php?login=1" method="post">
    <h1>Login</h1>
    <input type="text" name="email" placeholder="E-Mail">
    <input type="password" name="password" placeholder="Password">
    <p>Noch kein Account? <a href="register.php">Erstelle einen Account</a></p>
    <input type="submit" value="Submit">

</form>


</body>
</html>