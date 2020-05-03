<?php
require_once '../Mysqli/Database.php';

$query = "select * from employees";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_row()) {
        echo 'employeeNumber: ' . $row[0] . PHP_EOL;
        echo 'lastName: ' . $row[1] . PHP_EOL;
        echo 'firstName: ' . $row[2] . PHP_EOL;
        echo '---------' . PHP_EOL;
    }
    $result->close();
}
$mysqli->close();