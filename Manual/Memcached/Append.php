<?php
require_once 'Connect.php';

$mc->set('foo', 'abc');
$mc->append('foo', 'def');

var_dump($mc->get('foo'))