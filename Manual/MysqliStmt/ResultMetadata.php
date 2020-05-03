<?php
require_once '../Mysqli/Database.php';

$stmt = $mysqli->prepare('select * from employees');

if ($stmt) {
    $stmt->execute();

    $result = $stmt->result_metadata();

    echo '===Field count===' . PHP_EOL;
    var_dump($result->field_count); //Procedural style: mysqli_num_fields

    echo '===Fetch field===' . PHP_EOL;
    var_dump($result->fetch_field());

    echo '===Fetch field direct===' . PHP_EOL;
    var_dump($result->fetch_field_direct(2));

    echo '===Fetch fields===' . PHP_EOL;
    var_dump($result->fetch_fields());
}