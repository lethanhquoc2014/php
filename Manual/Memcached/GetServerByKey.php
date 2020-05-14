<?php
require_once 'Connect.php';

$mc->addServers(array(
    array('mem1.domain.com', 11211, 40),
    array('mem2.domain.com', 11211, 40),
    array('mem3.domain.com', 11211, 20),
));

$mc->setOption(Memcached::OPT_LIBKETAMA_COMPATIBLE, true);

var_dump($mc->getServerByKey('user'));
var_dump($mc->getServerByKey('log'));
var_dump($mc->getServerByKey('ip'));