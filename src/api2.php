<?php
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . ($_GET['zip'] ?? "1000005");
// . $_GET[''] GETで取得した値を使ってAPI
$response = file_get_contents($url);
echo('<pre>');
var_dump($response);
echo('</pre>');
