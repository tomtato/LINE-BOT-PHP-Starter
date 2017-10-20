<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$channelAccessToken = "qFYA2+S09Lq3O63m8YkZQfS7Q5c3MUBgi70fvM7IMCvVMU1qvJ+UbVWJtHnonKAnCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRViXziTGtdULF4TXqNDretymx0c/7xoEW/jGKM2rJcQHQdB04t89/1O/w1cDnyilFU="; 

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

// $hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
// $signature = base64_encode($hash);

// // Compare X-Line-Signature request header string and the signature
// echo $signature;

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
echo  $client->sign("events") ;

$userId 	= $client->parseEvents()[0]['source']['userId'];
echo $userId ;
// // echo "client : ".$client ;
// foreach ($client->parseEvents() as $event) {
//     switch ($event['type']) {
//         case 'message':
//             $message = $event['message'];
//             switch ($message['type']) {
//                 case 'text':
//                     $client->replyMessage(array(
//                         'replyToken' => $event['replyToken'],
//                         'messages' => array(
//                             array(
//                                 'type' => 'text',
//                                 'text' => $message['text']
//                             )
//                         )
//                     ));
//                     echo "message : ".$client;
//                     break;
//                 default:

//                     error_log("Unsupporeted message type: " . $message['type']);
//                     break;
//             }
//             echo "Unsupporeted message type switch : ".$message['type'];
//             break;
//         default:
//             error_log("Unsupporeted event type: " . $event['type']);
//             break;
//     }
// };