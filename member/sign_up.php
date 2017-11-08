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
    <link rel="stylesheet" type="text/css" href="<?php echo $dm?>/css/signup.css?d=201710281112121" />
</head>

<body class="signup">
<div class="content">
    <div class="logo">
        <a href="<?php echo $dm?>/index.php">
            <img src="/images/logo_file.png" alt="" width="160"/>
        </a>
        <h5>CREATE YOUR ACCOUNT</h5>
    </div>

    <div class="signupBox">
        <div>
            <form class="signupForm" action="#" method="POST">
                <label>EMAIL</label>
                <div class="input-group" id="box-1">
                    <input id="email" type="text" class="form-control" name="email" placeholder="이메일을 입력하세요" required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn mailSendBtn">메일 전송</span>
                    </div>
                </div>

                <label>EMAIL SECURITY KEY</label>
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

                <label>SMS SECURITY NUMBER</label>
                <div class="input-group" id="box-4">
                    <input id="smsAuthKey" type="text" class="form-control" name="smsAuthKey" placeholder="문자 보안숫자를 입력하세요" required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn smsKeyBtn">문자 코드인증</span>
                    </div>
                </div>

                <label>MY ETHER WALLET ADDRESS</label>
                <div class="input-group" id="box-5">
                    <input id="myEthAddr" type="text" class="form-control" name="myEthAddr" placeholder="마이이더월렛 지갑의 이더리움 주소를 입력해주세요." required="required">
                    <div class="input-group-btn">
                        <span class="btn blue-btn myEthAddrBtn">주소 확인</span>
                    </div>
                </div>

                <p class="tos-info">
                </p>
                <div class="form-actions">
                    <button type="submit" id="register-submit-btn" class="btn uppercase">SIGN UP</button>
                </div>
            </form>
        </div>
        <!--<div style="width:200px;float:left">
            <div class="authBox">
                <h4>인증 절차</h4>
                <div class="emailCheckBox">
                    <p><i id="emailStepIcon" class="glyphicon glyphicon-remove red-icon"></i> 이메일 인증</p>
                </div>
                <div class="smsCheckBox">
                    <p><i id="smsStepIcon" class="glyphicon glyphicon-remove red-icon"></i> 문자 인증</p>
                </div>
            </div>
        </div>-->
    </div>
</div>

<script src="<?php echo $dm?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/md5.js" type="text/javascript"></script>
<script src="<?php echo $dm?>/js/member/signup.js?d=20171028001211211" type="text/javascript"></script>
</body>

</html>
