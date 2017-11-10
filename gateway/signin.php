<?php

include(dirname(__DIR__).'/library/common.php'); //domain check
include(dirname(__DIR__).'/library/Requests.php'); //request for php class (개좋다 씨발 무조건 이거 써야게네)

Requests::register_autoloader(); //autoloader

/////////////////
//ajax data bind
////////////////
/*
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
*/



//0x8Eb89cAE287e809939987f983BF920A3481279eE
//$myEthAddr = "0x09B687Fe98491cB1C0ad9Fc957b29e209c845364"; //able addr
//$myEthAddr = "0xAC94F0bAf08290eB09D272C58e607d6cC732C082"; //sample 1
//$myEthAddr = "0x0D6B5A54F940BF3D52E438CaB785981aAeFDf40C"; //sample 2
//$myEthAddr = "0xB0B2E19f0f6151F1778F1D4ceCBF50987b2F2D46"; //sample 3
//$myEthAddr = "0x448e87EF22365dfE0820676Aeb7f258bdE4489FC"; //sample 4
$myEthAddr = "0x1d7312fF53D93d0A9C0943c7c2EEFa91377E4568"; //sample 5


$httpConfig = array(
    "url" => $apiHost.'/etherscan/api/account/txbalance', //url
    "headers" => array('Accept' => 'application/json'), //send header
    "data" => array('etheraddr'=>$myEthAddr) //post send data
);

$response = Requests::post($httpConfig["url"], $httpConfig["headers"], $httpConfig["data"]);

header('Content-Type: application/json');
echo $response->body;
?>
