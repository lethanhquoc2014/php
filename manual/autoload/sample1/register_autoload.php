<?php
spl_autoload_register(function($class_name) {
    include strtolower($class_name) . '.php';
});

$myclass1 = new Myclass1();
$myclass2 = new Myclass2();
var_dump($myclass1);
var_dump($myclass2);