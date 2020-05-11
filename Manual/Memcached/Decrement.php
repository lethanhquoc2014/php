<?php
require_once 'Connect.php';

$mc->set('counter', 5);
$n = $mc->decrement('counter');
var_dump($n);

$n = $mc->decrement('counter', 10);
var_dump($n);

var_dump($mc->get('counter'));

$mc->set('counter', 'abc');
$n = $mc->decrement(1);
var_dump($n);