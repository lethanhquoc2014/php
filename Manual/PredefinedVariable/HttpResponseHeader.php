<?php
file_get_contents('https://www.php.net/manual/en/reserved.variables.httpresponseheader.php');
var_dump($http_response_header);

// Result
/*
array(13) {
  [0]=>
  string(15) "HTTP/1.1 200 OK"
  [1]=>
  string(17) "Server: myracloud"
  [2]=>
  string(35) "Date: Sat, 25 Apr 2020 07:02:36 GMT"
  [3]=>
  string(38) "Content-Type: text/html; charset=utf-8"
  [4]=>
  string(17) "Connection: close"
  [5]=>
  string(20) "Content-language: en"
  [6]=>
  string(27) "X-Frame-Options: SAMEORIGIN"
  [7]=>
  string(106) "Set-Cookie: LAST_LANG=en; expires=Sun, 25-Apr-2021 07:02:36 GMT; Max-Age=31536000; path=/; domain=.php.net"
  [8]=>
  string(117) "Set-Cookie: COUNTRY=NA%2C185.85.3.195; expires=Sat, 02-May-2020 07:02:36 GMT; Max-Age=604800; path=/; domain=.php.net"
  [9]=>
  string(93) "Link: <https://www.php.net/manual/en/reserved.variables.httpresponseheader.php>; rel=shorturl"
  [10]=>
  string(44) "Last-Modified: Sat, 25 Apr 2020 04:04:37 GMT"
  [11]=>
  string(38) "Expires: Sat, 25 Apr 2020 07:02:36 GMT"
  [12]=>
  string(24) "Cache-Control: max-age=0"
}
 */