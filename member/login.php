<?php
    include(dirname(__DIR__).'/library/common.php'); //domain check
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
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/login.css?d=2017101100211212" />
</head>

<body class="login">
<div class="content">
    <div class="logo">
        <a href="<?php echo $dm?>/index.php">
            <img src="<?php echo $dm?>/images/logo_file.png" alt="" width="150"/>
        </a>
        <h5>Login to Your Account</h5>
    </div>
    <form class="loginForm" action="/member/memberInfo.php" method="POST">
        <input type="hidden" id="Hemail" name="Hemail">
        <input type="hidden" id="Hcountry" name="Hcountry">
        <input type="hidden" id="Hphone" name="Hphone">
        <input type="hidden" id="Hauth_type" name="Hauth_type">
        <input type="hidden" id="HmyEthAddr" name="HmyEthAddr">
        <label>EMAIL</label>
        <div id="box-1" class="input-group">
            <input id="email" type="text" class="form-control" name="email" placeholder="이메일 주소를 입력해주세요" required="required">
        </div>
        <label>MY ETHER ADDRESS</label>
        <div id="box-2" class="input-group">
            <input id="myEthAddr" type="text" class="form-control" name="myEthAddr" placeholder="마이이더월렛 이더리움 주소를 입력해주세요" required="required">
        </div>

        <div class="form-actions">
            <button type="submit" id="register-submit-btn" class="btn signInBtn uppercase">SIGN IN</button>
        </div>
    </form>

    <p class="create-account">
        <span>NEW TO ABLE?</span>
        <a href="<?php echo $dm?>/member/sign_up.php" class="btn">CREATE AN ACCOUNT</a>
    </span>
</div>

<script src="<?php echo $dm?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/md5.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/member/login.js?d=2017101101201" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/member/member.js?d=2017101101210" type="text/javascript"></script>
</body>

</html>
