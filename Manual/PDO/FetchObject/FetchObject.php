<?php
require_once 'Database.php';
require_once 'ProductLine.php';

$stmt = $pdo->prepare('select * from productlines');
$stmt->execute();

while ($object = $stmt->fetchObject('ProductLine')) {
    var_dump($object->getProductLine());
}