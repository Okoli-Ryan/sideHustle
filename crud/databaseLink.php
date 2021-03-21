<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Ugo');
define('DB_PASSWORD', 'okoliryan50');
define('DB_NAME', 'sideHustle');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
