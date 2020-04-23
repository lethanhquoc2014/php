<?php
include 'page1.php';
include 'page2.php';

$page1 = new Page1();
$page2 = new Page2();
$page2->changeProperty($page1);

var_dump($page1);
var_dump($page2);
/*
object(Page1)#1 (1) {
  ["foo"]=>
  string(3) "bar"
}
object(Page2)#2 (0) {
}
*/