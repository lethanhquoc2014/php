<?php
$host = 'localhost';
$username = 'root';
$passwd = null;
$dbname = 'classicmodels';
$port = 3306;
$socket = null;

$mysqli = new mysqli($host, $username, $passwd, $dbname, $port, $socket);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}