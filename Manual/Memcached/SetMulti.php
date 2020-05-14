<?php
require_once 'Connect.php';

$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$mc->setMulti($items, time() + 300);