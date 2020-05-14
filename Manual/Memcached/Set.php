<?php
require_once 'Connect.php';

$mc->set('int', 99);
$mc->set('string', 'a simple string');
$mc->set('array', array(11, 12));
/* expire 'object' key in 5 minutes */
$mc->set('object', new stdclass, time() + 300);


var_dump($mc->get('int'));
var_dump($mc->get('string'));
var_dump($mc->get('array'));
var_dump($mc->get('object'));