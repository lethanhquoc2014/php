<?php
class Product implements ArrayAccess
{
    protected $_productId;
    protected $_title;
    protected $_price;
    protected $_arrayAccess;

    public function __construct($data = null)
    {
        if (null != $data) {
            $this->populate($data);
        }
        $this->_arrayAccess = $this->toArray();
    }

    public function setProductId($productId)
    {
        $this->_productId = $productId;
        return $this;
    }

    public function getProductId()
    {
        return $this->_productId;
    }

    public function setTitle($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setPrice($price)
    {
        $this->_price = (float) $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function populate($row)
    {
        if (is_array($row)) {
            $row = new ArrayObject($row, ArrayObject::ARRAY_AS_PROPS);
        }
        $this->setProductId($row->productId)
            ->setTitle($row->title)
            ->setPrice($row->price);
    }

    public function toArray()
    {
        return array(
            'productId' => $this->getProductId(),
            'title' => $this->getTitle(),
            'price' => $this->getPrice(),
        );
    }

    public function offsetExists($offset)
    {
        return isset($this->_arrayAccess[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->_arrayAccess[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->_arrayAccess[] = $value;
        } else {
            $this->_arrayAccess[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->_arrayAccess[$offset]);
    }
}