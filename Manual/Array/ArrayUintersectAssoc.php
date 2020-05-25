<?php
/*
array_uintersect_assoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ) : array
Đi tìm phần giao của các mảng bằng hàm callback, chúng phải cùng key và value.
 */
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

$result = array_uintersect_assoc($array1, $array2, 'strcasecmp');
print_r($result);

function compare($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array1 = array(
    array(1, 2),
    array(3, 4)
);
$array2 = array(
    array(1, 2),
    array(3, 5)
);

$result = array_uintersect_assoc($array1, $array2, 'compare');
print_r($result);

/*
Array
(
    [a] => green
)
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
        )

)
 */