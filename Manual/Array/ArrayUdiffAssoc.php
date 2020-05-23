<?php
/*
array_udiff_assoc ( array $array1 , array $array2 [, array $... ], callable $value_compare_func ) : array

Tìm những phần tử của $array1 không nằm trong các mảng còn lại, so sánh bao gồm key và value.
Tham số truyền vào phải có hàm callback.
Đối với mảng 2 chiều thì phải dùng vòng lặp để đưa về mảng 1 chiều.
 */

class Sample
{
    private $member;

    function __construct($member)
    {
        $this->member = $member;
    }

    static function compare($obj1, $obj2)
    {
        if ($obj1->member === $obj2->member) {
            return 0;
        }
        return $obj1->member > $obj2->member ? 1 : -1;
    }
}

$array1 = array(
    "0.1" => new Sample(9),
    "0.5" => new Sample(12),
    0 => new Sample(23),
    1=> new Sample(4),
    2 => new Sample(-15),
);
$array2 = array(
    "0.2" => new Sample(9),
    "0.5" => new Sample(22),
    0 => new Sample(3),
    1=> new Sample(4),
    2 => new Sample(-15),
);

$result = array_udiff_assoc($array1, $array2, array('Sample', 'compare'));

print_r($result);

// Test
/*
Array
(
    [0.1] => Sample Object
        (
            [member:Sample:private] => 9
        )

    [0.5] => Sample Object
        (
            [member:Sample:private] => 12
        )

    [0] => Sample Object
        (
            [member:Sample:private] => 23
        )
)
 */