<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "classicmodels";

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully" . PHP_EOL;