<?php
require_once 'Database.php';

$stmt = $pdo->prepare('select * from offices');
$stmt->execute();
echo 'Column count: ' . $stmt->columnCount() . PHP_EOL;