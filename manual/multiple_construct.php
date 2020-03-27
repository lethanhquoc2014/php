<?php
class Myclass
{
    function __construct()
    {
        $args = func_get_args();
        $num = func_num_args();
        $func_name = '__construct' . $num;
        if (method_exists($this, $func_name)) {
            call_user_func_array(array($this, $func_name), $args);
        }
    }

    function __construct1($arg1)
    {
        echo('__construct with 1 param called: ' . $arg1 . PHP_EOL);
    }

    function __construct2($arg1, $arg2)
    {
        echo('__construct with 2 param called: ' . $arg1 . ',' . $arg2 . PHP_EOL);
    }

    function __construct3($arg1, $arg2, $arg3)
    {
        echo('__construct with 3 param called: ' . $arg1 . ',' . $arg2 . ',' . $arg3 . PHP_EOL);
    }
}

$myClass1 = new Myclass('Quoc');
$myClass2 = new Myclass('Quoc', 'Trang');
$myClass3 = new Myclass('Quoc', 'Trang', 'An');