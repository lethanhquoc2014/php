<?php
require_once 'Connect.php';

$mc->set('int', 99);
$mc->set('string', 'a simple string');
$mc->set('array', array(11, 12));

$mc->getDelayed(array('int', 'string', 'array'), true);
while ($result = $mc->fetch()) {
    var_dump($result);
}

var_dump($mc->get('array'));