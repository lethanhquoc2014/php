<?php
require_once 'Connect.php';

var_dump($mc->get('array', null, Memcached::GET_EXTENDED));