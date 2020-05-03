<?php
require_once '../Mysqli/Database.php';

$stmt = $mysqli->prepare('select employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle from employees');

if ($stmt) {
    $stmt->execute();

    $stmt->bind_result(
        $employeeNumber,
        $lastName,
        $firstName,
        $extension,
        $email,
        $officeCode,
        $reportsTo,
        $jobTitle
    );

    while ($stmt->fetch()) {
        printf ("%s | %s | %s | %s | %s | %s | %s | %s\n",
            $employeeNumber,
            $lastName,
            $firstName,
            $extension,
            $email,
            $officeCode,
            $reportsTo,
            $jobTitle,
        );
    }

    $stmt->close();
}

$mysqli->close();
