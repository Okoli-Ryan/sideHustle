<?php
require_once "databaseLink.php";

$sql = "DELETE FROM texts WHERE id = {$_GET['q_id']}";

if ($stmt = $mysqli->prepare($sql)) {

    if ($stmt->execute()) {
        // Records deleted successfully. Redirect to landing page
        header("location: read.php");
        exit();
    } else {
        echo "error deleting";
    }
}
