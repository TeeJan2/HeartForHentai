<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=DB_HEARTFORHENTAI', 'DB_HEARTFORHENTAI', '84{R7Z(g+NDz');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <?php include("inc/header.inc.php") ?>
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>

<?php
 $showFormular = true;

 if(isset($_GET['register'])) {
     $error = false;
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password2 = $_POST['password'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }

    if(strlen($password) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }

    if($password != $password2) {
        $error = true;
        echo 'Die Passwörter müssen übereinstimmen<br>';
    }

     if(!$error) {
         $passwort_hash = password_hash($password, PASSWORD_DEFAULT);

         $statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
         $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));

         if($result) {
             echo 'Du wurdest erfolgreich registriert.';
             header("Location: /");
             $showFormular = false;
         } else {
             echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
         }
     }

     if(!$error) {
         $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
         $result = $statement->execute(array('email' => $email));
         $user = $statement->fetch();

         if ($user !== false) {
             echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
             $error = true;
         }
     }
}

if($showFormular){

?>
<div class="signup-form">
    <form class="box" action="register.php?register=1" method="post">
        <h1>Register</h1>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Passwort">
        <input type="password" name="password2" placeholder="Passwort wiederhohlen">
        <input type="submit" name="" value="Submit">
        <p>Bereits einen Account? <a href="login.php">Melde dich an</a></p>
    </form>
</div>
<?php
}
?>
</body>
</html>
