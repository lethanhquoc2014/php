<?php
require_once 'Database.php';

$mysqli->query('set @a:=1');

$username = 'root';
$passwd = null;
$mysqli->change_user($username, $passwd, 'test');

if ($result = $mysqli->query('select database()')) {
    $row = $result->fetch_row();
    echo 'Default database: ' . $row[0] . PHP_EOL;
    $result->close();
}

if ($result = $mysqli->query('select @a')) {
    $row = $result->fetch_row();
    if ($row[0] === NULL) {
        echo 'Value of variable a is NULL' . PHP_EOL;
    }
    $result->close();
}

$mysqli->close();