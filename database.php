<?php

$hostname = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = mysqli_connect($hostname, $username, $password, $dbname);

if ($mysqli->connect_errno || !$mysqli) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>