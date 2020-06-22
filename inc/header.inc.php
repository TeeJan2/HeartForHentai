<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php
        $request = explode("/", $_SERVER['REQUEST_URI']);
        $request_file = end($request);
        switch($request_file){
            case 'index.php':
                echo "Start - HeartForHentai";
                break;
            case 'contanct.php':
                echo "Kontakt - HeartForHentai";
                break;
            case 'login.php':
                echo "Anmelden - HeartForHentai";
                break;
            case 'logout.php':
                echo "Abmelden - HeartForHentai";
                break;
            case 'register.php':
                echo "Registrieren - HeartForHentai";
                break;
            case 'team.php':
                echo "Team - HeartForHentai";
                break;
            case 'privancypolicy.php':
                echo "Datenschutzerklärung - HeartForHentai";
                break;
            case 'imprint.php':
                echo "Impressum - HeartForHentai";
                break;
            default:
                echo "HeartForHentai";
                break;
        }
        ?></title>
</head>
</html>