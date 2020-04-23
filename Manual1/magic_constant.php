<?php
namespace Manual;

class Base
{
    function sayA()
    {
        echo "'a' - said the " . __CLASS__ . PHP_EOL;
    }

    function sayB()
    {
        echo "'b' - said the " . get_class($this) . PHP_EOL;
    }
}

class Derived extends Base
{
    function sayA()
    {
        parent::sayA();
        echo "'a' - said the " . __CLASS__ . PHP_EOL;
    }

    function sayB()
    {
        parent::sayB();
        echo "'b' - said the " . get_class($this) . PHP_EOL;
    }

    function printMagicConstant()
    {
        echo "Line: " . __LINE__ . PHP_EOL; // 33
        echo "File: " . __FILE__ . PHP_EOL; //Users/quoclt/Projects/php/manual/magic_constant.php
        echo "Dir: " . __DIR__ . PHP_EOL; // /Users/quoclt/Projects/php/manual
        echo "Function: " . __FUNCTION__ . PHP_EOL; // printMagicConstant
        echo "Method: " . __METHOD__ . PHP_EOL; // Manual\Derived::printMagicConstant
        echo "Namespace: " . __NAMESPACE__ . PHP_EOL; // Manual
        echo "ClassName: " . Derived::class . PHP_EOL; // Manual
    }
}

$derived = new Derived();
$derived->sayA();
$derived->sayB();
$derived->printMagicConstant();