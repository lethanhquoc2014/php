<?php
require_once '../Mysqli/Database.php';

$stmt = $mysqli->prepare('select employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle from employees');


if ($stmt) {
    $stmt->execute();

    printf ("Field count: %s\n", $stmt->field_count);

    $stmt->close();
}

$mysqli->close();
