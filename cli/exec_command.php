<?php
// this command will return the last line as string
$output = exec('ls -al');
var_dump($output);

// this command will return all line as array.
$output = array();
exec('ls -al', $output);
var_dump($output);

// demo run script read file
$output = array();
exec('php -f read_file.php', $output);
var_dump($output);