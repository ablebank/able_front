<?php
    include(dirname(__DIR__).'/library/common.php'); //domain check
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />
    <meta name="naver-site-verification" content="" />

    <meta property="og:title" content="able coin" />
    <meta property="og:url" content="http://k-blockchains.com" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://k-blockchains.com/img/meta_logo.png" />
    <meta property="og:description" content="K-Blockchain은 4차 산업의 주요 분야 중에 하나인 블록체인 선두 기업입니다." />

    <meta name="twitter:title" content="ABLE" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="K-Blockchain은 4차 산업의 주요 분야 중에 하나인 블록체인 선두 기업입니다." />
    <meta name="twitter:image" content="http://k-blockchains.com/img/meta_logo.png" />
    <meta name="twitter:domain" content="k-blockchains" />

    <title>ABLE</title>
    <meta name="description" content="ABLE PROJECT" />

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/signup.css?d=2017102812121" />
</head>

<body class="signup">
<div class="content">
    <div class="logo">
        <a href="<?php echo $dm?>/index.php">
            <img src="/images/logo_file.png" alt="" width="150"/>
        </a>
    </div>

    <div class="signupBox">
        <div style="width:500px;float:left">
            <form class="signupForm" action="#" method="POST">
                <h4>Create Your Account</h4>

                <label>Email</label>
                <div class="input-group" id="box-1">
                    <input id="email" type="text" class="form-control" name="email" placeholder="이메일을 입력하세요" required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn mailSendBtn">메일 전송</span>
                    </div>
                </div>

                <label>Email Security Key</label>
                <div class="input-group" id="box-2">
                    <input id="emailAuthKey" type="text" class="form-control" name="emailAuthKey" placeholder="이메일 보안키를 입력하세요" required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn mailKeyBtn">메일 코드인증</span>
                    </div>
                </div>


                <label>SMS</label>
                <div class="input-group" id="box-3">
                    <input id="phoneNumber" type="text" class="form-control" name="phoneNumber" placeholder="휴대폰번호를 입력하세요( - 제외)" required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn smsSendBtn">문자 전송</span>
                    </div>
                </div>

                <label>SMS Security Number</label>
                <div class="input-group" id="box-4">
                    <input id="smsAuthKey" type="text" class="form-control" name="smsAuthKey" placeholder="문자 보안숫자를 입력하세요" required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn smsKeyBtn">문자 코드인증</span>
                    </div>
                </div>

                <label>PASSWORD</label>
                <div class="input-group" id="box-5">
                    <input id="password" type="password" class="form-control" name="password" style="width:307px" placeholder="패스워드를 입력하세요" required="required">
                </div>
                <label>RE-PASSWORD</label>
                <div class="input-group" id="box-6">
                    <input id="repassword" type="password" class="form-control" name="repassword" style="width:307px" placeholder="패스워드를 한번 더 입력하세요" required="required">
                </div>

                <!--<p class="tos-info">
                    By clicking on "Create an account" below, you are agreeing to the
                    <a href="https://help.github.com/terms" target="_blank">Terms of Service</a> and the
                    <a href="https://help.github.com/privacy" target="_blank">Privacy Policy</a>
                </p>-->
                <p class="tos-info">
                </p>
                <div class="form-actions">
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase">완료</button>
                </div>
            </form>
        </div>
        <div style="width:200px;float:left">
            <div class="authBox">
                <h4>인증 절차</h4>
                <div class="emailCheckBox">
                    <p><i id="emailStepIcon" class="glyphicon glyphicon-remove red-icon"></i> 이메일 인증</p>
                </div>
                <div class="smsCheckBox">
                    <p><i id="smsStepIcon" class="glyphicon glyphicon-remove red-icon"></i> 문자 인증</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $dm?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/md5.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/member/signup.js?d=201710280012121" type="text/javascript"></script>
</body>

</html>
