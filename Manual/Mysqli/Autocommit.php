<?php
require_once 'Database.php';

$mysqli->autocommit(true);

if ($result = $mysqli->query('select @@autocommit')) {
    $row = $result->fetch_row();
    echo 'Autocommit is ' . $row[0] . PHP_EOL;
    $result->free();
}

$mysqli->close();

// Result
/*
Autocommit is 1
 */