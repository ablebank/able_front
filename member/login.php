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
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/login.css?d=20171011002112" />


</head>

<body class="login">
<div class="content">
    <div class="logo">
        <a href="<?php echo $dm?>/index.php">
            <img src="<?php echo $dm?>/images/logo_file.png" alt="" width="150"/>
        </a>
    </div>
    <form class="loginForm" action="#" method="POST">
        <h4>Login to Your Account</h4>
        <label>Email</label>
        <div id="box-1" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="이메일 주소를 입력해주세요" required="required">
        </div>
        <label>My Ether Address</label>
        <div id="box-2" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="myEthAddr" type="text" class="form-control" name="myEthAddr" placeholder="마이이더월렛 이더리움 주소를 입력해주세요" required="required">
        </div>

        <div class="form-actions">
            <button type="submit" id="register-submit-btn" class="btn btn-success signInBtn uppercase">Sign in</button>
        </div>
    </form>

    <p class="create-account">
        New to ABLE?
        <a href="<?php echo $dm?>/member/sign_up.php">Create an account</a>.
    </p>
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
