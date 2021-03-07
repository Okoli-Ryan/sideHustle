<?php

session_start();

if (isset($_POST['signup'])) {
    $email = preg_replace("/[^A-Za-z0-9 ]/", '', $_POST['email']);
    $pass = $_POST['pass'];
    $name = $_POST['name'];

    if (isset($_COOKIE[$email])) {
        echo 'User Already exists';
        echo "<a href='signup.php'>Pick diffeent email</a>";
        return 1;
    }


    setcookie('name', $name, time() + 60 * 60 * 7);
    setcookie($email, $email, time() + 60 * 60 * 7);
    setcookie($pass . $email, $pass, time() + 60 * 60 * 7);
    setcookie('email', $email, time() + 60 * 60 * 7);
    setcookie($name, $name, time() + 60 * 60 * 7);
    header("location: welcome.php");
}
