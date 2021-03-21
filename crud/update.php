<?php

require_once "databaseLink.php";

if (isset($_POST['update']) and $_POST['update'] !== "") {
    $sql = "UPDATE texts SET content=? WHERE id=?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("si", $_POST['update'], $_GET['q_id']);

        if ($stmt->execute()) {
            header("location: read.php");
            exit();
        } else {
            echo "error";
        }
    }
} else {
    echo "error updating";
}
