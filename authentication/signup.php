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

    <form method="POST" action="newUser.php">
        <fieldset>
            <legend>Sign up</legend>
            <section>
                <h2>Name:</h2>
                <input required type="text" name="name">
            </section>
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
                <input type="submit" name="signup" value="signup">
            </section>
            <section>
                <a href="login.php">Login</a>
            </section>
        </fieldset>
    </form>
</body>

</html>