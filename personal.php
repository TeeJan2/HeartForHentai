<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
$userid = $_SESSION['userid'];

?> 