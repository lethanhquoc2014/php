<?php
$array = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($array);
print_r($result);

$array = array(4, "4", "3", 4, 3, "3");
$result = array_unique($array, SORT_NUMERIC);
print_r($result);