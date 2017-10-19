<?php



require "vendor/autoload.php";


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.line.me/v2/bot/profile/1541414817");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Authorization: Bearer u2e0cc06232508ddd44e6a79eb0e764bb";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

echo $result ;
curl_close ($ch);

