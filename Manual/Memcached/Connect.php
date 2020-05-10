<?php
$mc = new Memcached('localhost');
$mc->addServer('localhost', 11211);