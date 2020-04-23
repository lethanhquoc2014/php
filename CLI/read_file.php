<?php
$fh = fopen('text.txt', 'r');
while(!feof($fh)) {
    $line = fgets($fh);
    echo $line;
}
fclose($fh);