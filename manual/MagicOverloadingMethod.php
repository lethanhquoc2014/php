<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest();
$obj->runTest(1, 2);

MethodTest::runTest(1, 2);

// result
/*
Calling object method 'runTest' 1, 2
Calling static method 'runTest' 1, 2
 */