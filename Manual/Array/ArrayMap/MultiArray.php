<?php
/*
array_fill — Fill an array with values
array_fill ( int $start_index , int $num , mixed $value ) : array
 */

function showSpanish($n, $m)
{
    return "The number {$n} is called {$m} in Spanish";
}

function mapSpanish($n, $m)
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$result = array_map('showSpanish', $a, $b);
print_r($result);

$result = array_map('mapSpanish', $a, $b);
print_r($result);

// Test
/*
Array
(
    [0] => The number 1 is called uno in Spanish
    [1] => The number 2 is called dos in Spanish
    [2] => The number 3 is called tres in Spanish
    [3] => The number 4 is called cuatro in Spanish
    [4] => The number 5 is called cinco in Spanish
)
Array
(
    [0] => Array
        (
            [1] => uno
        )

    [1] => Array
        (
            [2] => dos
        )

    [2] => Array
        (
            [3] => tres
        )

    [3] => Array
        (
            [4] => cuatro
        )

    [4] => Array
        (
            [5] => cinco
        )

)
 */

