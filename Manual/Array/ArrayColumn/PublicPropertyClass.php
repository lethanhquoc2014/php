<?php
class User
{
    public $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('user 1'),
    new User('user 2'),
    new User('user 3'),
];

$usernames = array_column($users, 'username');
var_dump($usernames);

// Test
/*
array(3) {
  [0]=>
  string(6) "user 1"
  [1]=>
  string(6) "user 2"
  [2]=>
  string(6) "user 3"
}
 */