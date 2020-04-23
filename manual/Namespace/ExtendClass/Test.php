<?php
include "File1.php";
include "File2.php";

$b = new Bar\B();
$c = $b->factory();
$c->tell();

// Result
/*
Bar
*/