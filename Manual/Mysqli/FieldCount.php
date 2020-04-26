<?php
require_once 'Database.php';

$mysqli->real_query('select * from offices');

echo 'field count: ' . $mysqli->field_count . PHP_EOL; 
if ($mysqli->field_count) {
    $result = $mysqli->store_result();
    $row = $result->fetch_row();
    $result->close();
}

$mysqli->close();

// Result
/*
field count: 9
 */