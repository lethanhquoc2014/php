<?php
class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
        echo '==connect==' . PHP_EOL;
        // $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __sleep()
    {
        return array('username', 'password');
    }

    public function __wakeup()
    {
        $this->connect();
    }
}

$con = new Connection('localhost', 'root', 'root');
$serialize = serialize($con); // will call magic function __sleep.
var_dump($serialize);

$unserialize = unserialize($serialize); // will call magic function __awakeup.
var_dump($unserialize);

// result
/*
==connect==
string(100) "O:10:"Connection":2:{s:20:"Connectionusername";s:4:"root";s:20:"Connectionpassword";s:4:"root";}"
==connect==
object(Connection)#2 (4) {
  ["link":protected]=>
  NULL
  ["dsn":"Connection":private]=>
  NULL
  ["username":"Connection":private]=>
  string(4) "root"
  ["password":"Connection":private]=>
  string(4) "root"
}
 */