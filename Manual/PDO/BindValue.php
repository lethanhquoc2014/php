<?php
require_once 'Database.php';

$employeeNumber = 1702;
$stmt = $pdo->prepare('select * from employees where employeeNumber = :employeeNumber');
$stmt->bindValue(':employeeNumber', $employeeNumber);
$stmt->execute();

while ($row = $stmt->fetch()) {
    echo $row['lastName'] . ' ' . $row['firstName'] . PHP_EOL;
}