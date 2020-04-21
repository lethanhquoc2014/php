<?php
namespace Foo\Bar;

include 'File1.php';

const FOO = 2;

function foo()
{
    echo 'Foo\Bar\foo()' . PHP_EOL;
}

class Foo
{
    static function staticMethod()
    {
        echo 'Foo\Bar\Foo\staticMethod()' . PHP_EOL;
    }
}

echo '====Unqualified name====' . PHP_EOL;
foo();
Foo::staticMethod();
echo FOO . PHP_EOL;

echo '====Qualified name====' . PHP_EOL;
Subnamespace\foo();
Subnamespace\foo::staticMethod();
echo Subnamespace\FOO . PHP_EOL;

echo '====Full qualified name====' . PHP_EOL;
\Foo\Bar\foo();
\Foo\Bar\Foo::staticMethod();
echo \Foo\Bar\FOO . PHP_EOL;

\Foo\Bar\Subnamespace\foo();
\Foo\Bar\Subnamespace\Foo::staticMethod();
echo \Foo\Bar\Subnamespace\FOO . PHP_EOL;

