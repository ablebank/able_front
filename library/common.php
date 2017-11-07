<?php
switch($_SERVER["HTTP_HOST"]){
    case "localhost" :
        $apiHost = "http://devapi.able-project.io";
        $dm = "http://localhost";
        break;
    case "dev.able-project.io" :
        $apiHost = "http://devapi.able-project.io";
        $dm = "http://dev.able-project.io";
        break;
    case "www.able-project.io" :
        $apiHost = "https://api.able-project.io";
        $dm = "https://www.able-project.io";
        break;
    default:
        $apiHost = "https://api.able-project.io";
        $dm = "https://www.able-project.io";
        break;
}
?>
