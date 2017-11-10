<?php

include(dirname(__DIR__).'/library/common.php'); //domain check
include(dirname(__DIR__).'/library/Requests.php'); //request for php class (개좋다 씨발 무조건 이거 써야게네)

Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////

$login = isset($_POST["login"]) ? $_POST["login"] : false;
$email = isset($_POST["email"]) ? $_POST["email"] : false;

////////////////////////
//server curl connection
////////////////////////

$httpConfig = array(
    "url" => $apiHost.'/ico/access/login', //url
    "headers" => array('Accept' => 'application/json'), //send header
    "data" => array('email'=>$email, 'login'=>$login) //post send data
);

$response = Requests::post($httpConfig["url"], $httpConfig["headers"], $httpConfig["data"]);

header('Content-Type: application/json');
echo $response->body;

?>
