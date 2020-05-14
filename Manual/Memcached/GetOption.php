<?php
require_once 'Connect.php';

var_dump($mc->getOption(Memcached::OPT_COMPRESSION));
var_dump($mc->getOption(Memcached::OPT_POLL_TIMEOUT));