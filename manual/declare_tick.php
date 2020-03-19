<?php
function printHelloWorld()
{
    echo 'Hello world!' . PHP_EOL;
}

register_tick_function('printHelloWorld');

declare(ticks=5) {
    for($i=0; $i<10; $i++) {
        echo 'index: ' . $i . PHP_EOL;
    }
}

// result
/*
index: 0
index: 1
index: 2
index: 3
index: 4
Hello world!
index: 5
index: 6
index: 7
index: 8
index: 9
Hello world!
*/


