<?php



require "vendor/autoload.php";

$access_token = 'qFYA2+S09Lq3O63m8YkZQfS7Q5c3MUBgi70fvM7IMCvVMU1qvJ+UbVWJtHnonKAnCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRViXziTGtdULF4TXqNDretymx0c/7xoEW/jGKM2rJcQHQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);

$post = json_encode($data);
// $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// $result = curl_exec($ch);
// curl_close($ch);

print_r($post);







