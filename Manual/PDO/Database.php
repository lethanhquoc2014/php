<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "classicmodels";

try {
    $pdo = new PDO(
        "mysql:host=$servername;dbname=$database",
        $username,
        $password,
        array(PDO::ATTR_PERSISTENT => true)
    );
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . PHP_EOL;
}