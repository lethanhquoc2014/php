<?php
// Open a new connection to the MySQL server, with extra connect options:

$mysqli = mysqli_init();
if (!$mysqli) {
  die("mysqli_init failed");
}

// Specify connection timeout
$con -> options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);

// Specify read options from named file instead of my.cnf
$con -> options(MYSQLI_READ_DEFAULT_FILE, "myfile.cnf");

$con -> real_connect("localhost", "root", null, "classicmodels");

