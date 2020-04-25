<?php
function getLinesFromFile($fileName)
{
    if (!$fileHandle = fopen($fileName, 'r')) {
        throw new RuntimeException('Couldn\'t open file "' . $fileName . '"');
    }

    while (false !== $line = fgets($fileHandle)) {
        yield $line;
    }

    fclose($fileHandle);
}

class LineIterator implements Iterator
{
    protected $fileHandle;

    protected $line;
    protected $key;

    public function __construct($fileName)
    {
        if (!$this->fileHandle = fopen($fileName, 'r')) {
            throw new RuntimeException('Couldn\'t open file "' . $fileName . '"');
        }
    }

    public function rewind()
    {
        fseek($this->fileHandle, 0);
        $this->line = fgets($this->fileHandle);
        $this->key = 0;
    }

    public function valid()
    {
        return false !== $this->line;
    }

    public function current()
    {
        return $this->line;
    }

    public function key()
    {
        return $this->key;
    }

    public function next()
    {
        if (false !== $this->line) {
            $this->line = fgets($this->fileHandle);
            $this->key++;
        }
    }

    public function __destruct()
    {
        fclose($this->fileHandle);
    }
}

echo 'Read file by generator' . PHP_EOL;
foreach(getLinesFromFile('LanguageProgramming.txt') as $line) {
    echo $line;
}

echo PHP_EOL;
echo PHP_EOL;

echo 'Read file by iterator' . PHP_EOL;
$iterator = new LineIterator('LanguageProgramming.txt');
foreach ($iterator as $key => $value) {
    echo $value;
}
echo PHP_EOL;

// Result
/*
Read file by generator
PHP
C#
Javascript
Golang
Python
Ruby
C++

Read file by iterator
PHP
C#
Javascript
Golang
Python
Ruby
C++
 */