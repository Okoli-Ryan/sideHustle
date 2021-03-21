<?php

require_once "databaseLink.php";

if (isset($_POST['add-input']) and $_POST['add-input'] !== "") {
    $sql = "INSERT INTO texts (content) VALUES (?)";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $_POST['add-input']);

        if ($stmt->execute()) {
            header("location: read.php");
            exit();
        } else {
            echo "error";
        }
    }
} else {
    echo "error creating";
}
