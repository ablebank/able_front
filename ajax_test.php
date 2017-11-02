<?php
// First, include Requests
include(dirname(__FILE__).'/library/Requests.php');

Requests::register_autoloader(); //autoloader


$httpConfig = array(
    "url" => 'https://github.com/timeline.json', //url
    "headers" => array('Content-Type' => 'application/json'), //return header
    "data" => array() //post send data
);

$response = Requests::get($httpConfig["url"], $httpConfig["headers"], false);
$rsData = json_decode($response->body, true);
print_r($rsData["message"]);



/*
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://devapi.able-coin.io/ico/access/auth/email/dsmannk%40naver.com",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "content-type: application/json",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response["message"];
}
*/
?>