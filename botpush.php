<?php



require "vendor/autoload.php";

$access_token = 'qFYA2+S09Lq3O63m8YkZQfS7Q5c3MUBgi70fvM7IMCvVMU1qvJ+UbVWJtHnonKAnCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRViXziTGtdULF4TXqNDretymx0c/7xoEW/jGKM2rJcQHQdB04t89/1O/w1cDnyilFU=';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.line.me/v2/bot/profile/1541414817");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


// $headers = array();
// $headers[] = "Authorization: Bearer u2e0cc06232508ddd44e6a79eb0e764bb";
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

echo $result ;
curl_close ($ch);

