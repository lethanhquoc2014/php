<?php
class MyIterator implements Iterator
{
    private $position = 0;

    private $array = array();

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        return $this->position++;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}

$lanugages = array("PHP", "Java", "C#", "Golang", "Javascript", "C++");
$it = new MyIterator($lanugages);
foreach ($it as $key => $value) {
    var_dump($key, $value);
}

// Result
/*
int(0)
string(3) "PHP"
int(1)
string(4) "Java"
int(2)
string(2) "C#"
int(3)
string(6) "Golang"
int(4)
string(10) "Javascript"
int(5)
string(3) "C++"
 */