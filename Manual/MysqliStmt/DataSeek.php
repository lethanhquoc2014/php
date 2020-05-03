<?php
require_once '../Mysqli/Database.php';

if ($stmt = $mysqli->prepare('select officeCode, city from offices order by officeCode asc')) {
    $stmt->execute();

    $stmt->bind_result($officeCode, $city);

    $stmt->store_result();

    $stmt->data_seek(1);

    $stmt->fetch();

    printf ("Office code: %s  City: %s\n", $officeCode, $city);

    $stmt->close();
}

$mysqli->close();