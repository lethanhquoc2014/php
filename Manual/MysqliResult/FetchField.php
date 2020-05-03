<?php
require_once '../Mysqli/Database.php';

$query = "select * from employees";

if ($result = $mysqli->query($query)) {
    while ($finfo = $result->fetch_field()) {
        printf("--------------\n");
        printf("Name:     %s\n", $finfo->name);
        printf("Table:    %s\n", $finfo->table);
        printf("max. Len: %d\n", $finfo->max_length);
        printf("Flags:    %d\n", $finfo->flags);
        printf("Type:     %d\n", $finfo->type);
    }
    $result->close();
}
$mysqli->close();

// Result
/*
Name:     lastName
Table:    employees
max. Len: 9
Flags:    4097
Type:     253
 */