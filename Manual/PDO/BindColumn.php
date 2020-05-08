<?php
require_once 'Database.php';

$stmt = $pdo->prepare('select * from employees');
$stmt->execute();

$stmt->bindColumn(1, $employeeNumber);

while ($row = $stmt->fetch()) {
    echo $employeeNumber . PHP_EOL;
}
