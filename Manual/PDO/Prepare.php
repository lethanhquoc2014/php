<?php
require_once 'Database.php';

$sql = 'select * from payments where customerNumber = :customerNumber and checkNumber = :checkNumber';
$stmt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
if ($stmt) {
    $stmt->execute(array(':customerNumber' => 124, ':checkNumber' => 'HI366474'));
    $payments = $stmt->fetchAll();

    $stmt->execute(array(':customerNumber' => 103, ':checkNumber' => 'HQ336336'));
    $payments = $stmt->fetchAll();
}