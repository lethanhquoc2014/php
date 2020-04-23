<?php
namespace Bar;

class B extends \Foo\A
{
    protected $namespace = __NAMESPACE__;
}

class C
{
    public function tell()
    {
        echo "Bar" . PHP_EOL;
    }
}