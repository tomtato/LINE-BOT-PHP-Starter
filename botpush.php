<?php

define("LINE_MESSAGING_API_CHANNEL_SECRET", '75c03f392f6e53d662d6f5a8db9e421f
Issue');
define("LINE_MESSAGING_API_CHANNEL_TOKEN", '1541414817');

require "vendor/autoload.php";
require "vendor/linecorp/line-bot-sdk/src/LINEBot";

$bot = new vendor\linecorp\line-bot-sdk\src\LINEBot\LINE\LINEBot(
    new vendor\linecorp\line-bot-sdk\src\LINEBot\HTTPClient\CurlHTTPClient(LINE_MESSAGING_API_CHANNEL_TOKEN),
    ['channelSecret' => LINE_MESSAGING_API_CHANNEL_SECRET]
);

// $signature = $_SERVER["HTTP_".\LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
// $body = file_get_contents("php://input");

// $events = $bot->parseEventRequest($body, $signature);

// foreach ($events as $event) {
//     if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
//         $reply_token = $event->getReplyToken();
//         $text = $event->getText();
//         $bot->replyText($reply_token, $text);
//     }
// }

echo $bot;

