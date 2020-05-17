<?php
/*
array_key_first — Gets the first key of an array
array_key_first ( array $array ) : mixed
 */

$array = ['a' => 1, 'b' => 2, 'c' => 3];

$result = array_key_first($array);

var_dump($result);

// Test
/*
string(1) "a"
 */