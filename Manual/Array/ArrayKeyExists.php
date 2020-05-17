<?php
/*
array_key_exists — Checks if the given key or index exists in the array
array_key_exists ( mixed $key , array $array ) : bool
 */

$array = array('first' => 1, 'second' => 4);

$result = array_key_exists('first', $array);

var_dump($result);

// Test
/*
bool(true)
 */