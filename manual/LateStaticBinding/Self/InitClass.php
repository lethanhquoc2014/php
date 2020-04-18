<?php
abstract class AbstractWriter
{
    protected static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

class FileWriter extends AbstractWriter
{

}

$writer = FileWriter::getInstance();

// result
/*
PHP Fatal error:  Uncaught Error: Cannot instantiate abstract class AbstractWriter in /Users/quoclt/Projects/php/manual/LateStaticBinding/LimitOfSelf/AbstractWriter.php
 */