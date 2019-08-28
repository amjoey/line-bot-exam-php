<?php

require "vendor/autoload.php";

$access_token = 'YuKnhNGPOcEMaAuYgEBR8sSs0AZZ8olN6D/c5PcOnNowDelexUmHE4C2Dzx0CpD0Ryvcul199PRzqTjTNP+NwaQXqepOrX+bpxWtz6X+y9LxgL3Gc9l8hZKjo+87hvi3EUzRfu5QnMULdVnTKnjFFQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5112d54c06c00f9772bc951239d17fff';

$pushID = 'U6df020ea314604da9aa481fdd0054c96';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







