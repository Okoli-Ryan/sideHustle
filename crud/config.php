<?php

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$DB_SERVER = $cleardb_url["host"];
$DB_USERNAME = $cleardb_url["user"];
$DB_PASSWORD = $cleardb_url["pass"];
$DB_NAME = substr($cleardb_url["path"], 1);


/* Attempt to connect to MySQL database */
$mysqli = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
