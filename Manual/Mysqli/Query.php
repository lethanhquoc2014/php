<?php
require_once 'Database.php';

if ($result = $mysqli->query("select * from customers")) {
    
    while($row = $result->fetch_assoc()) {
        echo 'customerNumber: ' . $row['customerNumber'] . '; customerName: ' . $row['customerName'] . PHP_EOL;
    }

    echo 'Select returned ' . $result->num_rows . ' rows' . PHP_EOL;

    $result->close();
}

$mysqli->close();