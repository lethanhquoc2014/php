<?php
require_once '../Mysqli/Database.php';

$query = "select * from employees";

if ($result = $mysqli->query($query)) {
    $fields = $result->fetch_fields();
    foreach ($fields as $finfo) {
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