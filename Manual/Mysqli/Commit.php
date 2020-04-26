<?php
require_once 'Database.php';

$mysqli->autocommit(FALSE);

$mysqli->query("insert into offices values ('8', 'HCM', '+1 650 219 4782', 'Nguyen Dinh Chieu Street', 'Suite 300', 'CA', 'VN', '94080', 'NA')");

if (!$mysqli->commit()) {
    echo 'Transaction commit failed' . PHP_EOL;
}

$mysqli->close();