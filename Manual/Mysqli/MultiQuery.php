<?php
require_once 'Database.php';

$query = 'select * from employees;';
$query .= 'select * from offices';

if ($mysqli->multi_query($query)) {
    do {
        if ($result = $mysqli->store_result()) {
            while($row = $result->fetch_row()) {
                echo $row[0] . PHP_EOL;
            }
            $result->free();
        }
        if ($mysqli->more_results()) {
            echo '-----------------' . PHP_EOL;
        }
    } while($mysqli->next_result());
}

$mysqli->close();