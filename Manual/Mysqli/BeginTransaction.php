<?php
require_once 'Database.php';

$mysqli->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
$mysqli->query('select * from products');
$mysqli->commit();

$mysqli->close();