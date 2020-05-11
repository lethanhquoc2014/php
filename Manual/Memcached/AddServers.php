<?php

$mc = new Memcached('localhost');

$servers = array(
    array('mem1.domain.com', 11211, 33),
    array('mem2.domain.com', 11211, 67)
);

$mc->addServers($servers);