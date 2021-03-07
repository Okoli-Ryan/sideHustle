<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome.php</title>
</head>

<body>
    <?php
    echo "welcome " . $_COOKIE['email'];
    ?>
    <h3> You've been logged in</h3>
    <a href="logout.php">Logout</a>
</body>

</html>