<?php


$access_token = 'YuKnhNGPOcEMaAuYgEBR8sSs0AZZ8olN6D/c5PcOnNowDelexUmHE4C2Dzx0CpD0Ryvcul199PRzqTjTNP+NwaQXqepOrX+bpxWtz6X+y9LxgL3Gc9l8hZKjo+87hvi3EUzRfu5QnMULdVnTKnjFFQdB04t89/1O/w1cDnyilFU=';

$userId = 'U6df020ea314604da9aa481fdd0054c96';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

