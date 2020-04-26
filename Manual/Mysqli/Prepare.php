<?php
require_once 'Database.php';

$stmt = $mysqli->prepare("select city from offices where officeCode = ? and postalCode = ?");
if ($stmt) {
    $officeCode = 1;
    $postalCode = 94080;
    $stmt->bind_param("ss", $officeCode, $postalCode);

    $stmt->execute();

    $stmt->bind_result($city);

    $stmt->fetch();

    echo 'City: ' . $city . PHP_EOL;

    $stmt->close();
}

$mysqli->close();