<?php
require_once 'Connect.php';

$mc->setOption(Memcached::OPT_COMPRESSION, false);
$mc->set('foo', 'abc');
$mc->prepend('foo', 'def');

var_dump($mc->get('foo'));