<?php
require_once 'Database.php';

$firstName = "'s Diane";
$firstName = $mysqli->real_escape_string($firstName);
$query = $mysqli->query("select * from employees where firstName = '$firstName'");
if (!$query) {
    printf("Error: %s\n", $mysqli->error);
}

$mysqli->close();