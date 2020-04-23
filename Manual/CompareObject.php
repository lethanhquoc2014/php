<?php
function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSE';
    } else {
        return 'TRUE';
    }
}

function compareObjects($o1, $o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . PHP_EOL;
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . PHP_EOL;
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . PHP_EOL;
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . PHP_EOL;
}

class Flag
{
    public $flag;

    function __construct($flag = true)
    {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    function __construct($flag = true)
    {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Two instances of the same class" . PHP_EOL;
compareObjects($o, $p);

echo "\nTwo references to the same instance" . PHP_EOL;
compareObjects($o, $q);

echo "\nInstances of two different classes" . PHP_EOL;
compareObjects($o, $r);

// result
/*
Two instances of the same class
o1 == o2 : TRUE
o1 != o2 : FALSE
o1 === o2 : FALSE
o1 !== o2 : TRUE

Two references to the same instance
o1 == o2 : TRUE
o1 != o2 : FALSE
o1 === o2 : TRUE
o1 !== o2 : FALSE

Instances of two different classes
o1 == o2 : FALSE
o1 != o2 : TRUE
o1 === o2 : FALSE
o1 !== o2 : TRUE

 */
