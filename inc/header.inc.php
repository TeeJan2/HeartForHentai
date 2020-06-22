<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php
        $request = explode("/", $_SERVER['REQUEST_URI']);
        $request_file = end($request);
        switch($request_file){
            case 'index.php':
                echo "Start - HentaiForLife.com";
                break;
            case 'contanct.php':
                echo "Kontakt - HentaiForLife.com";
                break;
            case 'login.php':
                echo "Anmelden - HentaiForLife.com";
                break;
            case 'logout.php':
                echo "Abmelden - HentaiForLife.com";
                break;
            case 'register.php':
                echo "Registrieren - HentaiForLife.com";
                break;
            case 'team.php':
                echo "Team - HentaiForLife.com";
                break;
            default:
                echo "HentaiForLife.com";
                break;
        }
        ?></title>
</head>
</html>