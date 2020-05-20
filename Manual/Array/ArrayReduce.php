<?php
/*
array_reduce ( array $array , callable $callback [, mixed $initial = NULL ] ) : mixed

Thực hiện vòng lặp để tính tổng, tích... tất cả giá trị của mảng thông qua hàm callback.
Nếu truyền vô là mảng đa chiều thì sẽ bị lỗi
 */

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$array = array(1, 2, 3);

$sum = array_reduce($array, 'sum');
echo 'sum: ' . $sum . PHP_EOL;

$product = array_reduce($array, 'product', 2);
echo 'product: ' . $product . PHP_EOL;

$array = array();
$product = array_reduce($array, 'product', 2);
echo 'product: ' . $product . PHP_EOL;

// Test
/*
sum: 6
product: 12
product: 2
 */