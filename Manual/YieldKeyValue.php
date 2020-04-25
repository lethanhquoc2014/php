<?php
$strMoney = "500,1000,2000,5000,10000,20000,50000,100000,200000,500000";

function moneyParser($input)
{
    $money_list = explode(',', $input);
    foreach ($money_list as $key => $money) {
        yield $key => $money;
    }
}

foreach (moneyParser($strMoney) as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}