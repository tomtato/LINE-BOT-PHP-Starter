<?php // callback.php

require "vendor/autoload.php";

//Read request body
$body = file_get_contents('php://input');

$api_secret = '75c03f392f6e53d662d6f5a8db9e421f';

//Signature validation
if (validateSignature(getallheaders(), $body, $api_secret)) {

    //Use the response for your needs
    $resposne = json_decode($body);
    $public_id = $resposne->public_id;

} else {
    die("Validation failed");
}

function validateSignature($headers, $upload_response, $api_secret)
{

    // $signed_payload = $upload_response . $headers["X-Cld-Timestamp"];

    //Compute a HMAC with the SHA256 hash function, using the api secret as the key and the signed_payload string as the message
    if (sha1($api_secret) === $headers['X-Line-Signature']) {
        
        //To prevent against timing attacks, we compare the expected signature to each of the received signatures.
        // if ($headers["X-Cld-Timestamp"] <= strtotime('-2 hours')) {
        //     //Signatures match, but older than 2 hours
        //     return false;
        // } else {
        // 	//Signatures match, and timestamp 
        //     return true;
        // }
        echo "true";
        // return true;
    } else {
        //Signatures NOT match
        echo "false";
        // return false;
    }
}