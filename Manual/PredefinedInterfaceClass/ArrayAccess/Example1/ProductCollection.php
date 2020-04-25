<?php
class ProductCollection implements Countable, SeekableIterator
{
    protected $_stack;
    protected $_position;
    protected $_count;

    public function __construct()
    {
        $this->rewind();
        $this->_count = 0;
        $this->_stack = array();
    }

    public function addEntity($entity)
    {
        $this->_stack[] = $entity;
        $this->_count++;
    }

    public function rewind()
    {
        $this->_position = 0;
    }

    public function next()
    {
        $this->_position++;
    }

    public function key()
    {
        return $this->_position;
    }

    public function current()
    {
        return $this->_stack[$this->_position];
    }

    public function valid()
    {
        return isset($this->_stack[$this->_position]);
    }

    public function seek($position)
    {
        $this->_position = $position;
    }

    public function count()
    {
        return $this->_count;
    }
}