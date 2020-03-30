<?php
$a = 1;
$b = 2;

function sum()
{
    global $a, $b;
    $b = $a + $b;
}

sum();

echo $b . PHP_EOL;

// result
/*
3
 */