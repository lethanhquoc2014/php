<?php
require_once 'Connect.php';

$mc->set('foo', 'abc');
$mc->replace('foo', 'def');

var_dump($mc->get('foo'));