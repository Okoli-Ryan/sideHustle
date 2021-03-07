<?php

if (isset($_POST['login'])) {
    $email = preg_replace("/[^A-Za-z0-9 ]/", '', $_POST['email']);
    $pass = $_POST['pass'];

    if (!isset($_COOKIE[$email])) {
        echo 'User does not exist';
        echo "<a href='login.php'>Try again</a>";
        return 1;
    }
    if ($email == $_COOKIE[$email] and $pass == $_COOKIE[$pass . $email]) {
        setcookie('email', $email, time() + 60 * 60 * 7);
        setcookie('pass', $pass, time() + 60 * 60 * 7);

        header("location: welcome.php");
    } else {
        echo "invalid credentials... <a href='login.php'>Try again</a>";
    }
} else {
    header("location: login.php");
}
