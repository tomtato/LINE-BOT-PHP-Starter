<?php

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('1541414817');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '75c03f392f6e53d662d6f5a8db9e421f']);


// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
// $response = $bot->replyMessage('<reply token>', $textMessageBuilder);
// if ($response->isSucceeded()) {
//     echo 'Succeeded!';
//     return;
// }

// // Failed
// echo $response->getHTTPStatus() . ' ' . $response->getRawBody();