<?php
require_once '../Mysqli/Database.php';

$stmt = $mysqli->prepare('select * from employees where employeeNumber = ? and lastName = ? and email = ?');

if ($stmt) {
    printf("Statement has %d markers.\n", $stmt->param_count);
}

$stmt->close();
$mysqli->close();