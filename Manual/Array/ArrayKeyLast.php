<?php
// array_key_last — Gets the last key of an array
// array_key_last ( array $array ) : mixed

$array = ['a' => 1, 'b' => 2, 'c' => 3];

$result = array_key_last($array);

var_dump($result);

// Test
/*
string(1) "c"
 */