<?php // callback.php

require "vendor/autoload.php";

// $httpRequestBody = "events"; 

// $channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

// $hash = hash_hmac('sha256', $httpRequestBody, $channelSecret, true);
// $signature = base64_encode($hash);

// // Compare X-Line-Signature request header string and the signature
// echo $signature;


$headers = getallheaders();
$hubSignature = $headers['X-Line-Signature'];
 
// Split signature into algorithm and hash
list($algo, $hash) = explode('=', $hubSignature, 2);
 
// Get payload
$payload = file_get_contents('php://input');
 
// Calculate hash based on payload and the secret
$payloadHash = hash_hmac($algo, $payload, $channelSecret);
 
// Check if hashes are equivalent
if ($hash !== $payloadHash) {
    // Kill the script or do something else here.
    die('Bad secret');
}
 
// Your code here.
$data = json_decode($payload);