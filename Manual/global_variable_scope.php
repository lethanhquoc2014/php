<?php
$a = 1;
$b = 2;

function sum()
{
    $GLOBALS['b'] = $GLOBALS['b'] + $GLOBALS['a'];
}

sum();
echo $b . PHP_EOL;

// result
/*
3
 */
