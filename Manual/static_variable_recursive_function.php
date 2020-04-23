<?php
function test()
{
    static $count = 0;
    $count++;
    echo $count . PHP_EOL;

    if ($count < 10) {
        test();
    }
}

test();

// result
/*
1
2
3
4
5
6
7
8
9
10
 */