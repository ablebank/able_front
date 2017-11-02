<?php
include(dirname(__FILE__).'/library/Requests.php');
Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////
$email = $_GET["email"];

////////////////////////
//server curl connection
////////////////////////
$httpConfig = array(
    "url" => 'https://github.com/timeline.json', //url
    "headers" => array('Content-Type' => 'application/json'), //return header
    "data" => array() //post send data
);

$response = Requests::get($httpConfig["url"], $httpConfig["headers"], false);
//$rsData = $response->body;

header('Content-Type: application/json');
$json_pretty = json_encode($response->body, JSON_PRETTY_PRINT);
echo $json_pretty;
//print_r($rsData["message"]);