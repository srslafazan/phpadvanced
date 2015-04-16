<?php
session_start();

    if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ) {
        header('Location: home.php');
    } else {
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = 1;
    }


?>

<h1>Login</h1>