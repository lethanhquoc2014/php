<?php
class CachedGenerator
{
    protected $cache = [];
    protected $generator = null;

    public function __construct($generator)
    {
        $this->generator = $generator;
    }

    public function generator()
    {
        foreach ($this->cache as $item) {
            yield $item;
        }

        while ($this->generator->valid()) {
            $current = $this->generator->current();
            $this->cache[] = $current;
            $this->generator->next();
            yield $current;
        }
    }
}

class Foobar
{
    protected $loader = null;

    protected function loadItems()
    {
        foreach (range(0, 10) as $i) {
            usleep(200000);
            yield $i;
        }
    }

    public function getItems()
    {
        $this->loader = $this->loader ?: new CachedGenerator($this->loadItems());
        return $this->loader->generator();
    }
}

$f = new Foobar;

echo "First" . PHP_EOL;
foreach ($f->getItems() as $i) {
    echo $i . " ";
    if ($i ==5) {
        break;
    }
}

echo PHP_EOL . "Second" . PHP_EOL;
foreach ($f->getItems() as $i) {
    echo $i . " ";
}

echo PHP_EOL . "Third" . PHP_EOL;
foreach ($f->getItems() as $i) {
    echo $i . " ";
}
echo PHP_EOL;

// result
/*
First
0 1 2 3 4 5 
Second
0 1 2 3 4 5 6 7 8 9 10 
Third
0 1 2 3 4 5 6 7 8 9 10 
 */