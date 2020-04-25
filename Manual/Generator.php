<?php
function xrange($start, $limit, $step = 1)
{
    if ($start <= $limit) {
        if ($step <= 0) {
            throw new LogicException("Step must be positive");
        }
        
        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException("Step must be negative");
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

echo 'Single digit odd numbers from range(): ';
foreach (range(1, 10, 2) as $number) {
    echo $number . " ";
}
echo PHP_EOL;

echo 'Single digit odd numbers from xrange(): ';
foreach (xrange(1, 10, 2) as $number) {
    echo $number . " ";
}
echo PHP_EOL;

// result
/*
Single digit odd numbers from range(): 1 3 5 7 9 
Single digit odd numbers from xrange(): 1 3 5 7 9 
*/