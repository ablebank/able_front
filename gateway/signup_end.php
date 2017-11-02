<?php

include(dirname(__DIR__).'/library/common.php'); //domain check
include(dirname(__DIR__).'/library/Requests.php'); //request for php class (개좋다 씨발 무조건 이거 써야게네)

Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////
$authKey = isset($_POST["authKey"]) ? $_POST["authKey"] : false;
$login = isset($_POST["login"]) ? $_POST["login"] : false;
$timestamp = isset($_POST["timestamp"]) ? $_POST["timestamp"] : false;

////////////////////////
//server curl connection
////////////////////////
$httpConfig = array(
    "url" => $apiHost.'/ico/notifiy/auth/user/'.$authKey, //url
    "headers" => array('Accept' => 'application/json'), //send header
    "data" => array('login'=>$login, 'timestamp'=>$timestamp) //post send data
);

$response = Requests::post($httpConfig["url"], $httpConfig["headers"], $httpConfig["data"]);

header('Content-Type: application/json');
echo $response->body;
?>
