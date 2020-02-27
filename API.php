<?php
$url = "http://api.isproxyip.com/v1/check.php?key=tKmBUUFULMoqiPzIHLd2qFT6cWDf7oodO5GK7UkgLaRu9fYGNp&ip=".$_SERVER['REMOTE_ADDR']."&format=json";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
$json = curl_exec($ch);
curl_close($ch);
print_r(json_decode($json));


?>