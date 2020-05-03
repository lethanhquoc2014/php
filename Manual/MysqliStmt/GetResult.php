<?php
require_once '../Mysqli/Database.php';

$stmt = $mysqli->prepare('select employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle from employees');

if ($stmt) {
    $stmt->execute();

    $result = $stmt->get_result();

    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        foreach ($row as $r) {
            print "$r |";
        }
        print "\n";
    }
}
$stmt->close();
$mysqli->close();
