<?php

$url = "http://localhost/BE16_CR12_DanielaBuga/Website/displayAll.php";
$cli = curl_init($url);
curl_setopt($cli, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cli);
curl_close($cli);
echo $res;