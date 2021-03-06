<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    function iterateVisible()
    {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            print "$key => $value" . PHP_EOL;
        }
    }
}

$class = new MyClass();
foreach ($class as $key => $value) {
    print "$key => $value" . PHP_EOL;
}

$class->iterateVisible();

// result
/*
var1 => value 1
var2 => value 2
var3 => value 3
MyClass::iterateVisible:
var1 => value 1
var2 => value 2
var3 => value 3
protected => protected var
private => private var
 */