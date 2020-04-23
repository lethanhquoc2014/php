<?php
class CallableClass
{
    public function __invoke($x, $y)
    {
        var_dump($x, $y);
    }
}

$obj = new CallableClass;
$obj(5, 2);
var_dump(is_callable($obj));