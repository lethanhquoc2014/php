<?php
/*
array_product ( array $array ) : number

Trả về một number là kết quả nhân của các value của mảng.
Nếu là mảng rỗng hoặc mảng đa chiều thì sẽ trả về 1
 */
$array = array(1, 2, 3, 4);
$result = array_product($array);
echo 'Product: ' . $result . PHP_EOL;

$array = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4);
$result = array_product($array);
echo 'Product: ' . $result . PHP_EOL;

$array = array(
    array(1, 2, 3),
    array(3, 4),
);
$result = array_product($array);
echo 'Product: ' . $result . PHP_EOL;

$array = array();
$result = array_product($array);
echo 'Product: ' . $result . PHP_EOL;

// Test
/*
Product: 24
Product: 24
Product: 1
Product: 1
 */