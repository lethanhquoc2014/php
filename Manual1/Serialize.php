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
        // $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __serialize(): array
    {
        return [
            'dsn' => $this->dsn,
            'user' => $this->username,
            'pass' => $this->password,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }
}

$con = new Connection('localhost', 'root', '');
$serialize = serialize($con);
$unserialize = unserialize($serialize);

var_dump($serialize, $unserialize);

// result
/*
string(88) "O:10:"Connection":3:{s:3:"dsn";s:9:"localhost";s:4:"user";s:4:"root";s:4:"pass";s:0:"";}"
object(Connection)#2 (4) {
  ["link":protected]=>
  NULL
  ["dsn":"Connection":private]=>
  NULL
  ["username":"Connection":private]=>
  NULL
  ["password":"Connection":private]=>
  NULL
}
 */


