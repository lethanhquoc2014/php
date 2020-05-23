<?php

$a = array(
    array(
        'id' => 10,
        'name' => 'John',
        'color' => 'red',
    ),
    array(
        'id' => 20,
        'name' => 'Elise',
        'color' => 'blue',
    ),
    array(
        'id' => 30,
        'name' => 'Mark',
        'color' => 'red',
    ),
);

$b = array(
    array(
        'id' => 15,
        'name' => 'Nancy',
        'color' => 'black',
    ),
    array(
        'id' => 20,
        'name' => 'Elise',
        'color' => 'blue',
    ),
    array(
        'id' => 30,
        'name' => 'Mark',
        'color' => 'red',
    ),
    array(
        'id' => 40,
        'name' => 'John',
        'color' => 'orange',
    ),
);

function compareId($a, $b)
{
    if ($a['id'] == $b['id']) {
        return 0;
    }
    return $a['id'] > $b['id'] ? 1 : -1;
}

function compareName($a, $b)
{
    return strcasecmp($a['name'], $b['name']);
}

$result = array_udiff($a, $b, 'compareId');
print_r($result);

$result = array_udiff($a, $b, 'compareName');
print_r($result);

// Test
/*
Array
(
    [0] => Array
        (
            [id] => 10
            [name] => John
            [color] => red
        )

)
Array
(
)
 */