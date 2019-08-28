<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = 'YuKnhNGPOcEMaAuYgEBR8sSs0AZZ8olN6D/c5PcOnNowDelexUmHE4C2Dzx0CpD0Ryvcul199PRzqTjTNP+NwaQXqepOrX+bpxWtz6X+y9LxgL3Gc9l8hZKjo+87hvi3EUzRfu5QnMULdVnTKnjFFQdB04t89/1O/w1cDnyilFU=';
// Get POST body content
file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);
