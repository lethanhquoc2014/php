<?php
require_once '../Mysqli/Database.php';

$query = "select * from orderdetails";

if ($result = $mysqli->query($query)) {

    printf("Result set has %d rows.\n", $result->num_rows);
    
    $result->close();
}
$mysqli->close();