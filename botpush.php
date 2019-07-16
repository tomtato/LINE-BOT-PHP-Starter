<?php



require "vendor/autoload.php";

$access_token = 'GROK+YfHMuxTdhaHcfgJWd5PY3+LkujKFEdJS1Kn+HesJLRzce3hPKUqXKuPa5XmqeKlmc68BYP8kp5JEDT0sS59r1TgK+iN7omxlfrZFR2ItWql4ZCKAdF9Pbr+t4EkhDNHNyUk/8zykhKh/BU42AdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'U9309a2801ba75bc2cce86f36d1d99ece';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('Udf3e802040b36afd3eb46205ecdbfb8b', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







