<?php
require_once 'Connect.php';

$mysqli->real_query('SELECT * FROM customers');
$result = $mysqli->use_result();
while ($row = $result->fetch_assoc()) {
    echo "customerNumber: " . $row['customerNumber'] . PHP_EOL;
}