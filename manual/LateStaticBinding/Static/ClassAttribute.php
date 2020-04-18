<?php
class Foo
{
    protected static $name = 'foo';

    public static function getName()
    {
        return static::$name;
    }
}

class Bar extends Foo
{
    protected static $name = 'bar';
}

echo Foo::getName() . PHP_EOL;
echo Bar::getName() . PHP_EOL;

// result
/*
foo
bar
 */