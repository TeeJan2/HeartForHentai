<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    if($user !== false && password_verify($password, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        header("Location: index.php");
    } else {
        $errorMessage = "Email oder Passwort ist ungültig!";
    }
}
?>
<!--- DB Name und Benutzer: test Passwort waJCNf3YP7f3FwbD --->
<html lang="de" dir="ltr" xmlns="http://www.w3.org/1999/html">
  <head>
      <?php include("inc/header.inc.php") ?>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <?php
    if(isset($errorMessage)) {
        echo $errorMessage;
    }
  ?>

  <form class="box" action="login.php?login=1" method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="E-Mail">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Submit">
        <p>Noch kein Account? <a href="register.php">Erstelle einen Account</a></p>

  </form>


  </body>
</html>