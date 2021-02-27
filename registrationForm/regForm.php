<?php

$name = "";
$password = "";
$email = "";
if (isset($_POST['submit'])) {
    $name = "Name: " . $_POST['SHname'];

    $password = "Password: " . $_POST['SHpassword'];

    $email = "Email: " . $_POST['SHemail'];
}
?>

<form method="post">
    <fieldset>
        <legend>Sign up</legend>
        <section>
            <h2>Name:</h2>
            <input required type="text" name="SHname">
        </section>
        <section>
            <h2>Email:</h2>
            <input required type="email" name="SHemail">
        </section>
        <section>
            <h2>Password</h2>
            <input required type="password" name="SHpassword">
        </section>
        <br>
        <section>
            <input type="submit" name="submit" value="Sign Up">
        </section>
    </fieldset>
</form>
<h2><?php echo $name; ?></h2>
<h2><?php echo $email; ?></h2>
<h2><?php echo $password; ?></h2>