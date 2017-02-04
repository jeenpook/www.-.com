<?php
$access_token = 'M0/VYVTBuLWAI0REoSuT+kCGAmUhMknRqKyu7PcbpN3ck25mX+A0rx1p4FsIbvS7Bg7BPOur8RfAeihwR3+D1ICF83sd+LRKVorTsPYpAvo1pabCLppWzPGVIHHgVCySvxwhMdYuzYfj42R/RwTZiAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;