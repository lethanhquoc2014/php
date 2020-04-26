<?php
require_once 'Database.php';

$mysqli->autocommit(FALSE);

$mysqli->query("insert into offices values ('9', 'Ha Noi', '+1 650 219 4782', 'Nguyen Dinh Chieu Street', 'Suite 300', 'CA', 'VN', '94080', 'NA')");

if (!$mysqli->commit()) {
    echo 'Transaction commit failed' . PHP_EOL;
}

// It only return latest insert_id for primary key auto_increment, otherwise return 0.
echo 'New office has officeCode ' . $mysqli->insert_id . PHP_EOL;

$mysqli->close();