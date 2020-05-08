<?php
require_once 'Database.php';

$employees = $pdo->query('select * from employees');
$employees = $employees->fetchAll();
foreach ($employees as $row) {
    echo $row['employeeNumber'] . ' ' . $row['email'] . PHP_EOL;
}