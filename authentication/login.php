<?php
if (isset($_COOKIE['email'])) {
    header("location: welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>login.php</title>
</head>

<body>

    <form method="post" action="validate.php">
        <fieldset>
            <legend>Log in</legend>

            <section>
                <h2>Email:</h2>
                <input required type="email" name="email">
            </section>
            <section>
                <h2>Password</h2>
                <input required type="password" name="pass">
            </section>
            <br>
            <section>
                <input type="submit" name="login" value="login">
            </section>
            <section>
                <a href="signup.php">Signup</a>
            </section>
        </fieldset>
    </form>
</body>

</html>