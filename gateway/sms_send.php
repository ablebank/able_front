<?php

include(dirname(__DIR__).'/library/common.php'); //domain check
include(dirname(__DIR__).'/library/Requests.php'); //request for php class (개좋다 씨발 무조건 이거 써야게네)

Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////
$phoneNumber = isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : false;
$mail_key = isset($_POST["mail_key"]) ? $_POST["mail_key"] : false;
$timestamp = isset($_POST["timestamp"]) ? $_POST["timestamp"] : false;
$country = isset($_POST["country"]) ? $_POST["country"] : false;

////////////////////////
//server curl connection
////////////////////////
$httpConfig = array(
    "url" => $apiHost.'/ico/access/auth/phone/'.$phoneNumber, //url
    "headers" => array('Accept' => 'application/json'), //send header
    "data" => array('mail_key'=>$mail_key, 'timestamp'=>$timestamp, 'country'=>$country) //post send data
);

$response = Requests::post($httpConfig["url"], $httpConfig["headers"], $httpConfig["data"]);

header('Content-Type: application/json');
echo $response->body;
?>
