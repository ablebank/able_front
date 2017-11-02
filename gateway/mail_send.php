<?php

include(dirname(__DIR__).'/library/common.php'); //domain check
include(dirname(__DIR__).'/library/Requests.php'); //request for php class (개좋다 씨발 무조건 이거 써야게네)

Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////
$email = isset($_POST["email"]) ? $_POST["email"] : false;

////////////////////////
//server curl connection
////////////////////////
$httpConfig = array(
    "url" => $apiHost.'/ico/access/auth/email/'.$email, //url
    "headers" => array('Accept' => 'application/json'), //send header
    "data" => array() //post send data
);

$response = Requests::get($httpConfig["url"], $httpConfig["headers"], false);

header('Content-Type: application/json');
echo $response->body;
?>
