<?php



require "vendor/autoload.php";

$access_token = 'qFYA2+S09Lq3O63m8YkZQfS7Q5c3MUBgi70fvM7IMCvVMU1qvJ+UbVWJtHnonKAnCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRViXziTGtdULF4TXqNDretymx0c/7xoEW/jGKM2rJcQHQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/group/75c03f392f6e53d662d6f5a8db9e421f/member/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

