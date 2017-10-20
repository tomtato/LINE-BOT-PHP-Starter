<?php // callback.php

require "vendor/autoload.php";

$httpRequestBody = "events"; 

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
$signature = base64_encode($hash);

// Compare X-Line-Signature request header string and the signature
echo $signature;
// if (sha1($signature) === $headers['X-Line-Signature']) {
//     //signatures match
//     echo 'true';
// } 
// else {
// 	echo 'false';
//     //signatures NOT match
// }