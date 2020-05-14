<?php
require_once 'Connect.php';

var_dump($mc->getOption(Memcached::OPT_HASH) == Memcached::HASH_DEFAULT);
$mc->setOption(Memcached::OPT_HASH, Memcached::HASH_MURMUR);
$mc->setOption(Memcached::OPT_PREFIX_KEY, "widgets");
echo "Prefix key is now: ", $mc->getOption(Memcached::OPT_PREFIX_KEY), "\n";