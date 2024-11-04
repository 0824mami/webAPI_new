<?php
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=1000005" ;
$response = file_get_contents($url);
echo('<pre>');
var_dump($response);
echo('</pre>');

