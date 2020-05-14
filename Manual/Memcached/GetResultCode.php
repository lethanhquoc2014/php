<?php
require_once 'Connect.php';

$mc->add('foo', 'bar');

var_dump($mc->getResultCode());