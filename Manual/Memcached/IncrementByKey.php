<?php
require_once 'Connect.php';

$mc->set('counter', 0);
$mc->incrementByKey('localhost', 'counter');
$n = $mc->incrementByKey('localhost', 'counter', 10);
var_dump($n);

$mc->set('counter', 'abc');
$n = $mc->incrementByKey('localhost', 'counter');
// ^ will fail due to item value not being numeric
var_dump($n);
