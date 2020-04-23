<?php
namespace Foo\Bar\Subnamespace;

const FOO = 1;
function foo()
{
    echo 'Foo\Bar\Subnamespace\foo()' . PHP_EOL;
}

class Foo
{
    static function staticMethod() 
    {
        echo 'Foo\Bar\Subnamespace\Foo\staticMethod()' . PHP_EOL;
    }
}