<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "classicmodels";

try {
    $connect = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" . PHP_EOL;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . PHP_EOL;
}