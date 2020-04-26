<?php
require_once 'Database.php';

$db = mysqli_init();
$db->real_connect("localhost","root","","classicmodels");
var_dump($db->get_charset());

// Result
/*
object(stdClass)#3 (8) {
  ["charset"]=>
  string(4) "utf8"
  ["collation"]=>
  string(15) "utf8_general_ci"
  ["dir"]=>
  string(0) ""
  ["min_length"]=>
  int(1)
  ["max_length"]=>
  int(3)
  ["number"]=>
  int(33)
  ["state"]=>
  int(1)
  ["comment"]=>
  string(13) "UTF-8 Unicode"
}
 */