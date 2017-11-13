<?php
include(dirname(__DIR__).'/library/common.php'); //domain check

$user["email"] = isset($_POST["Hemail"]) ? $_POST["Hemail"] : "";
$user["country"] = isset($_POST["Hcountry"]) ? $_POST["Hcountry"] : "";
$user["phone"] = isset($_POST["Hphone"]) ? $_POST["Hphone"] : "";
$user["auth_type"] = isset($_POST["Hauth_type"]) ? $_POST["Hauth_type"] : "";
$user["myEthAddr"] = isset($_POST["HmyEthAddr"]) ? $_POST["HmyEthAddr"] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ABLE</title>
    <meta name="Description" content="" />
    <meta name="Keywords" content="kblcokchain, able, cryptocoin mining, cryptocurrency, bitcoin, ethereum" />
    <meta name="robots" content="index, follow, noodp" />
    <meta name="author" content="able-project.io" />
    <meta name="copyright" content="(c) 2017 able-project.io. All rights reserved" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:url" content="https://www.able-project.io/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"  type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/memberInfo.css?d=20171011013421212" />
</head>

<body class="login">
<div class="content">
    <div class="logo">
        <a href="<?php echo $dm?>/index.php">
            <img src="<?php echo $dm?>/images/logo_file.png" alt="" width="150"/>
        </a>
        <h5>YOUR ACCOUNT INFORMATION</h5>
    </div>

    <div class="loginForm">
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="glyphicon glyphicon-unchecked"></i>
                    <span class="caption-subject text-uppercase"> EMAIL</span>
                </div>
            </div>
            <div class="portlet-body">
                <h5><?php echo $user["email"]?></h5>
            </div>
        </div>

        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="glyphicon glyphicon-unchecked"></i>
                    <span class="caption-subject text-uppercase"> PHONE</span>
                </div>
            </div>
            <div class="portlet-body">
                <h5><?php echo $user["phone"]?></h5>
            </div>
        </div>

        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="glyphicon glyphicon-unchecked"></i>
                    <span class="caption-subject text-uppercase"> MY ETHER WALLET ADDRESS</span>
                </div>
            </div>
            <div class="portlet-body">
                <h5><?php echo $user["myEthAddr"]?></h5>
            </div>
        </div>

        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="glyphicon glyphicon-unchecked"></i>
                    <span class="caption-subject text-uppercase"> ABLE ETHER WALLET ADDRESS</span>
                </div>
            </div>
            <div class="portlet-body">
                <h5>0x09B687Fe98491cB1C0ad9Fc957b29e209c845364</h5>
            </div>
        </div>

        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="glyphicon glyphicon-unchecked"></i>
                    <span class="caption-subject text-uppercase"> SEND ETH</span>
                </div>
            </div>
            <div class="portlet-body">
                <h5>기부하신 금액은 총 <span class="send-eth"></span><span class="font-up"> ETH</span> 입니다.</h5>
            </div>
        </div>

        <div class="portlet endBox">
            <div class="portlet-title">
                <div class="caption">
                    <i class="glyphicon glyphicon-unchecked"></i>
                    <span class="caption-subject text-uppercase"> RECIEVE ABLE TOKEN</span>
                </div>
            </div>
            <div class="portlet-body">
                <h5>받으실 ABLE 토큰 개수는 총 <span class="receive-token"></span><span class="font-up"> ABLE</span> 입니다.</h5>
            </div>
        </div>

        <div class="addr-action-box">
            <a href="https://etherscan.io/address/<?php echo $user["myEthAddr"]?>" class="btn addr-info-btn" target="_blank">내 주소 조회하기</a>
        </div>
    </div>
</div>

<script src="<?php echo $dm?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/md5.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/member/memberInfo.js?d=2017101101201" type="text/javascript"></script>
<script type="text/javascript">
    //ajax
    var myEthAddr = "<?php echo $user["myEthAddr"]?>";

    var sendEth = document.querySelector(".send-eth");
    var receiveToken = document.querySelector(".receive-token");

    urls = "/gateway/getSend_eth.php";

    $.ajax({
        url: urls,
        method: 'POST',
        data: {
            myEthAddr: myEthAddr
        },
        dataType: 'json',
        success: function(d){

            if(d.resultCode == 200 ){
                //change check todo
                sendEth.innerText = d.balance.toString();
                receiveToken.innerText = d.able_balance.toString();
            }else{
                sendEth.innerText = "0";
                receiveToken.innerText = "0";
            }
        },
        error: function(e){
            sendEth.innerText = "0";
            receiveToken.innerText = "0";
        }
    });
</script>
</body>

</html>
