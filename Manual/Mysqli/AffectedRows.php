<?php
require_once 'Database.php';

$result = $mysqli->query('select * from offices');
echo 'Affected rows (SELECT): ' . $mysqli->affected_rows . PHP_EOL;

$mysqli->query('update products set quantityInStock = 9909 where productCode= "S10_1678"');
echo 'Affected rows (UPDATE): ' . $mysqli->affected_rows . PHP_EOL;

$result->close();
$mysqli->close();

// Result
/*
Affected rows (SELECT): 7
Affected rows (UPDATE): 1
 */