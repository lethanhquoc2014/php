<?php
class MyData implements Serializable
{
    private $data;

    public function __construct()
    {
        $this->data = "My private data";
    }

    public function serialize()
    {
        return serialize($this->data);
    }

    public function unserialize($data)
    {
        $this->data = unserialize($data);
    }

    public function getData()
    {
        return $this->data;
    }
}

$obj = new MyData;
$ser = serialize($obj);
var_dump($ser);

$newobj = unserialize($ser);
var_dump($newobj->getData());

// Resutlt
/*
string(41) "C:6:"MyData":23:{s:15:"My private data";}"
string(15) "My private data"
 */
