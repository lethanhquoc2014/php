<?php
require_once 'Connect.php';

$mc->setOption(Memcached::OPT_COMPRESSION, false);
$mc->set('foo', 'abc');
$mc->prependByKey('localhost', 'foo', 'def');

var_dump($mc->get('foo'));