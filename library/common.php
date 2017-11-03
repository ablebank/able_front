<?php
switch($_SERVER["HTTP_HOST"]){
    case "localhost" :
        $apiHost = "http://devapi.able-coin.io";
        $dm = "http://localhost";
        break;
    case "dev.able-coin.io" :
        $apiHost = "http://devapi.able-coin.io";
        $dm = "http://dev.able-coin.io";
        break;
    case "www.able-coin.io" :
        $apiHost = "https://api.able-coin.io";
        $dm = "http://www.able-coin.io";
        break;
    default:
        $apiHost = "https://api.able-coin.io";
        $dm = "http://www.able-coin.io";
        break;
}
?>