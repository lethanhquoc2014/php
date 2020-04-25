<?php
function genOneToThree()
{
    for ($i = 1; $i <= 3; $i++) {
        yield $i;
    }
}

foreach (genOneToThree() as $i) {
    echo $i . PHP_EOL;
}