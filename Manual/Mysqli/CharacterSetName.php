<?php
require_once 'Database.php';

$charset = $mysqli->character_set_name();
echo 'Current character set is ' . $charset . PHP_EOL;

$mysqli->close();