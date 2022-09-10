<?php

declare(strict_types=1);

session_start();

$login = $_GET['login'];
$pass = $_GET['pass'];

if ($login == "notes_user") {
    if ($pass == "123") {
        $_SESSION['login'] = "notes_user";
        header("Location: index.php");

        // foreach($_SESSION as $key => $value)
        // {
        //     echo "$key: $value <br>";
        // }
    } else {
        echo "Podałeś złe hasło";
    }
} elseif ($login == "user") {
    if ($pass == "321") {
        $_SESSION['login'] = "user";
        header("Location: index.php");

        // foreach($_SESSION as $key => $value)
        // {
        //     echo "$key: $value <br>";
        // }
    } else {
        echo "Podałeś złe hasło";
    }
} else {
    echo "Podałeś zły login";
}
