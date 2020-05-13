<?php
require_once 'Connect.php';

$mc->set('counter', 0);
$mc->increment('counter');
$n = $mc->increment('counter', 10);
var_dump($n);

$mc->set('counter', 'abc');
$n = $mc->increment('counter');
// ^ will fail due to item value not being numeric
var_dump($n);
