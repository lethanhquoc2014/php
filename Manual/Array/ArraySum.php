<?php
/*
array_sum ( array $array ) : number

Tính tổng giá trị của mảng một chiều, mảng đa chiều thì trả về 0
 */

$array = array(1, 2, 3, 4, 5);
$sum = array_sum($array);
echo 'Sum of array: ' . $sum . PHP_EOL;

$array = array(
    array(1,2,3),
    array(4,5,6)
);
$sum = array_sum($array);
echo 'Sum of array: ' . $sum . PHP_EOL;