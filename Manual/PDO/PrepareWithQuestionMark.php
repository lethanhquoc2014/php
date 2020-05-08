<?php
require_once 'Database.php';

$sql = 'select * from payments where customerNumber = ? and checkNumber = ?';
$stmt = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
if ($stmt) {
    $stmt->execute(array(124, 'HI366474'));
    $payments = $stmt->fetchAll();

    $stmt->execute(array(103, 'HQ336336'));
    $payments = $stmt->fetchAll();
}