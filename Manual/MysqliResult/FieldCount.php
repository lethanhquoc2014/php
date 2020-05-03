<?php
require_once '../Mysqli/Database.php';

$query = "select * from customers";

if ($result = $mysqli->query($query)) {
    echo 'Field count: ' . $result->field_count . PHP_EOL;
    $result->close();
}
$mysqli->close();