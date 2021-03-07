<?php

if (isset($_COOKIE['email'])) {
    setcookie('email', "", time() - 1);
    setcookie('pass', "", time() - 1);
    setcookie('name', "", time() - 1);
}
header("location: login.php");
