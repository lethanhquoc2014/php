<?php
require_once '../Mysqli/Database.php';

$query = "select * from customers";

if ($result = $mysqli->query($query)) {
    $result->data_seek(10);

    $row = $result->fetch_row();

    printf ("Customer number: %s  Customer name: %s\n", $row[0], $row[1]);

    $result->close();
}

$mysqli->close();

// Result
/*
Customer number: 141  Customer name: Euro+ Shopping Channel
 */