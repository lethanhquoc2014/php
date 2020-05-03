<?php
require_once '../Mysqli/Database.php';

$stmt = $mysqli->prepare('select * from employees');

if ($stmt) {
    $stmt->execute();

    $stmt->store_result();

    printf("Number of rows: %d\n", $stmt->num_rows);
}

$stmt->close();
$mysqli->close();