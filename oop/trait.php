<?php
trait Math
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }
}

trait SalesTicket
{
    private $ticket = array();

    public function push($item)
    {
        array_push($this->ticket, $item);
    }

    public function getTicket()
    {
        return $this->ticket;
    }
}

class FoodOrder
{
    use Math;
    use SalesTicket;
}

$order = new FoodOrder();

// call trait SalesTicket
// $order->push(1234);
// $order->push(5678);
// var_dump($order->getTicket());

// call trait Math
// var_dump($order->add(102, 2));