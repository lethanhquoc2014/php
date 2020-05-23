<?php
/*
array_search ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : mixed

Tìm kiếm trong mảng một chiều, nếu tìm thấy giá trị thì trả về key, ngược lại thì trả về false.
$strict = true là so sánh ===
 */

$array = array('blue', 'red', 'green', 'red');

$red = array_search('red', $array, true);
$black = array_search('black', $array);
echo 'Key of red: ' . $red . PHP_EOL;
echo 'Key of black: ' . $black . PHP_EOL;

$array = array(
    0 => array('name' => 'quoc'),
    1 => array('name' => 'trang'),
);

$name = array_search('quoc', $array);
echo 'Key of quoc: ' . $name . PHP_EOL;

// Test
/*
Key of red: 1
Key of black: 
Key of quoc: 
 */