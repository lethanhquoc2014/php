<?php
abstract class AbstractWriter
{
    protected static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            echo '===init===' . PHP_EOL;
            self::$instance = new static();
        }
        return self::$instance;
    }
}

class FileWriter extends AbstractWriter
{

}

$w1 = FileWriter::getInstance();
$w2 = FileWriter::getInstance();
var_dump($w1, $w2);

// result
/*
===init===
object(FileWriter)#1 (0) {
}
object(FileWriter)#1 (0) {
}
 */