<?php
include(dirname(__DIR__).'/library/common.php'); //domain check
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ABLE</title>
    <meta name="Description" content="" />
    <meta name="Keywords" content="kblcokchain, able, cryptocoin mining, cryptocurrency, bitcoin, ethereum" />
    <meta name="robots" content="index, follow, noodp" />
    <meta name="author" content="able-coin.io" />
    <meta name="copyright" content="(c) 2017 able-coin.io. All rights reserved" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:url" content="https://www.able-coin.io/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"  type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/memberInfo.css?d=201710110021" />


</head>

<body class="login">
<div class="content">
    <div class="logo">
        <a href="<?php echo $dm?>/index.php">
            <img src="<?php echo $dm?>/images/logo_file.png" alt="" width="150"/>
        </a>
    </div>
    <form class="loginForm" action="#" method="POST">
        <h4>Your Account Infomation</h4>
        <label>Email</label>
        <div id="box-1" class="input-group">
            <?php echo urldecode($_GET["email"])?>
        </div>
        <label>Phone</label>
        <div id="box-2" class="input-group">
            <?php echo $_GET["phone"]?>
        </div>
        <label>My Ether Wallet Address</label>
        <div id="box-2" class="input-group">
            <?php echo $_GET["myEthAddr"]?>
        </div>
        <label>ABLE Ether Wallet Address</label>
        <div id="box-2" class="input-group">
            0x09B687Fe98491cB1C0ad9Fc957b29e209c845364
        </div>

        <div class="form-actions">
            <a href="https://etherscan.io/address/<?php echo $_GET["myEthAddr"]?>" class="btn signInBtn" target="_blank">내 주소 조회하기</a>
        </div>
    </form>
</div>

<script src="<?php echo $dm?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/md5.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/member/memberInfo.js?d=201710110120" type="text/javascript"></script>
</body>

</html>
