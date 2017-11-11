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
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/memberInfo.css?d=2017101101021" />
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
        <label>Email</label>
        <div id="box-1" class="input-group">
            <?php echo $user["email"]?>
        </div>
        <label>Phone</label>
        <div id="box-2" class="input-group">
            <?php echo $user["phone"]?>
        </div>
        <label>My Ether Wallet Address</label>
        <div id="box-3" class="input-group">
            <?php echo $user["myEthAddr"]?>
        </div>
        <label>ABLE Ether Wallet Address</label>
        <div id="box-4" class="input-group">
            0x09B687Fe98491cB1C0ad9Fc957b29e209c845364
        </div>

        <p>
            <?php echo $user["email"]?>님은 <span class="send-eth">4</span> ETH 를 기부하였습니다. BITBANK 거래소에서 받으실 TOKEN 개수는 <span class="recive-token">20000</span> ABLE 입니다.
        </p>
        <!--<div class="addr-action-box">
            <a href="https://etherscan.io/address/<?php echo $user["myEthAddr"]?>" class="btn addr-info-btn" target="_blank">내 주소 조회하기</a>
        </div>-->
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

    urls = "/gateway/getSend_eth.php";

    $.ajax({
        url: urls,
        method: 'POST',
        data: {
            myEthAddr: myEthAddr
        },
        dataType: 'json',
        success: function(d){
            console.log(d)

            if(d.resultCode == 200 ){
                //change check todo

            }else{
                alert("로그인에 실패하였습니다\n다시 시도 해주세요");
                return false;
            }
        }
    });
</script>
</body>

</html>
