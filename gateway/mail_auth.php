<?php

include(dirname(__DIR__).'/library/common.php'); //domain check
include(dirname(__DIR__).'/library/Requests.php'); //request for php class (개좋다 씨발 무조건 이거 써야게네)

Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////
$mailAuthKey = isset($_POST["mailAuthKey"]) ? $_POST["mailAuthKey"] : false;
$email       = isset($_POST["email"]) ? $_POST["email"] : false;

////////////////////////
//server curl connection
////////////////////////
$httpConfig = array(
    "url" => $apiHost.'/ico/verify/auth/email/'.$mailAuthKey, //url
    "headers" => array('Accept' => 'application/json'), //send header
    "data" => array('email'=>$email) //post send data
);

$response = Requests::post($httpConfig["url"], $httpConfig["headers"], $httpConfig["data"]);

header('Content-Type: application/json');
echo $response->body;
?>
