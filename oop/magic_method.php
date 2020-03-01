<?php
class User
{
    public function __construct()
    {

    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function __get($property)
    {
        if (isset($this->$property)) {
            return $this->$property;
        }
    }

    public function __call($method, $args)
    {
        // method __call will be called when the input method not exist.
        echo 'Method ' . $method . ' is not existed';
    }

    public function __sleep()
    {
        // this method will be call when we serialize object of this class.
        // we list the properties will be serialize in this array
        return array("fullname");
    }

    public function __wakeup()
    {
        // this method will be call when we userialize data
    }

    public function __clone()
    {
        // this method will be call when we clone a new object
        echo '666666';
    }
}

$user = new User();
$user->id = 1234;
$user->fullname = "Le Thanh Quoc";
$user->email = "admin@gmail.com";
$user->address = "HCM";
// var_dump($user);

// serialize
$serialize = serialize($user);
var_dump($serialize);

// unserialize
$unserialize = unserialize($serialize);
var_dump($unserialize);

$user1 = clone $user;
