<?php
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . ($_GET['zip'] ?? "1000005");
$response = file_get_contents($url);
$response = json_decode($response,true);
echo('<pre>');
var_dump($response);
echo('</pre>');