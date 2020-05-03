<?php
require_once '../Mysqli/Database.php';

$query = "select * from employees";

if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
        echo 'employeeNumber: ' . $obj->employeeNumber . PHP_EOL;
        echo 'lastName: ' . $obj->lastName . PHP_EOL;
        echo 'firstName: ' . $obj->firstName . PHP_EOL;
        echo '---------' . PHP_EOL;
    }
    $result->close();
}
$mysqli->close();