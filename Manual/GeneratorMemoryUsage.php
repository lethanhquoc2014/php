<?php
function getArrayValues()
{
    $values = [];
    echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;
    for($i = 1; $i < 800000; $i++) {
        $values[] = $i;
        if ($i % 200000 == 0) {
            echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;
        }
    }

    return $values;
}

function getGeneratorValues()
{
    echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;
    for($i = 1; $i < 800000; $i++) {
        yield $i;
        if ($i % 200000 == 0) {
            echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;
        }
    }
}

echo 'Use memory by array' . PHP_EOL;

$start = microtime(true);
getArrayValues();
$end = microtime(true);

$time_usage = round($end - $start, 2);
echo 'Time usage: ' . $time_usage . PHP_EOL;

echo 'Use memory by generator' . PHP_EOL;

$start = microtime(true);
foreach(getGeneratorValues() as $i) {}
$end = microtime(true);

$time_usage = round($end - $start, 2);
echo 'Time usage: ' . $time_usage . PHP_EOL;

// result
/*
Use memory by array
0.38 MB
8.38 MB
16.38 MB
32.38 MB
Time usage: 0.04
Use memory by generator
0.38 MB
0.38 MB
0.38 MB
0.38 MB
Time usage: 0.05
 */