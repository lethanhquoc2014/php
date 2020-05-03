<?php
require_once '../Mysqli/Database.php';

$query = "select * from employees";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo 'employeeNumber: ' . $row['employeeNumber'] . PHP_EOL;
        echo 'lastName: ' . $row['lastName'] . PHP_EOL;
        echo 'firstName: ' . $row['firstName'] . PHP_EOL;
        echo '---------' . PHP_EOL;
    }
    $result->free();
}
$mysqli->close();