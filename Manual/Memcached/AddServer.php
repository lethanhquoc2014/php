<?php
$mc = new Memcached('localhost');
$mc->addServer('mem1.domain.com', 11211, 33);
$mc->addServer('mem2.domain.com', 11211, 67);