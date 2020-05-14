<?php
require_once 'Connect.php';

var_dump($mc->getOption(Memcached::OPT_HASH) == Memcached::HASH_DEFAULT);

$mc->setOptions(array(Memcached::OPT_HASH => Memcached::HASH_MURMUR, Memcached::OPT_PREFIX_KEY => "widgets"));

var_dump($mc->getOption(Memcached::OPT_HASH) == Memcached::HASH_DEFAULT);
echo "Prefix key is now: ", $mc->getOption(Memcached::OPT_PREFIX_KEY), "\n";