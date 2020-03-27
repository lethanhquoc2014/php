<?php
class Foo
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }

    public function sayHello()
    {
        echo "Hello World!!" . PHP_EOL;
    }
}

$foo = Foo::getInstance();
$foo->sayHello();