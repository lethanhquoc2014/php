<?php
require_once 'Database.php';

$count = $pdo->exec('delete from orders where orderNumber = 10427 or orderNumber = 10428');

print("Deleted $count rows.\n");