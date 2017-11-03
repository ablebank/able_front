<?php
  include(dirname(__FILE__).'/library/common.php'); //domain check
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ABLE</title>
    <meta name="Description" content="">
    <meta name="Keywords" content="kblcokchain, able, cryptocoin mining, cryptocurrency, bitcoin, ethereum">
    <meta name="robots" content="index, follow, noodp">
    <meta name="author" content="able-coin.io">
    <meta name="copyright" content="(c) 2017 able-coin.io. All rights reserved">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://www.able-coin.io/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $dm?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $dm?>/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo $dm?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo $dm?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $dm?>/css/main.css?d=2017092513412121">
    <link rel="shortcut icon" href="<?php echo $dm?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $dm?>/favicon.ico" type="image/x-icon">

  <!-- Animated background color -->
  <script src="<?php echo $dm?>/js/three.min.js"></script>
  <script src="<?php echo $dm?>/js/projector.js"></script>
  <script src="<?php echo $dm?>/js/canvas-renderer.js"></script>
  <script src="<?php echo $dm?>/js/projector.js"></script>
  <script src="<?php echo $dm?>/js/canvas-renderer.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="<?php echo $dm?>/js/color.js"></script>
  <script src="<?php echo $dm?>/js/projector.js"></script>
  <script src="<?php echo $dm?>/js/canvas-renderer.js"></script>
  <script src="<?php echo $dm?>/js/canvas-init.js"></script>
  <!-- Custom styles for this template -->
</head>
<body>

  <section id="mainSection">
    <div class="fullscreen-bg">
      <script>
          var mouseX = 0, mouseY = 0,
              windowHalfX = window.innerWidth / 2,
              //windowHalfY = 100000,
              windowHalfY = window.innerHeight / 2,
              //SEPARATION = 100, AMOUNTX = 10000, AMOUNTY = 10000,
              camera, scene, renderer;
          init();
          animate();
      </script>
    </div>
    <header id="header">
      <div class="header-content clearfix">
        <a class="logo" href="<?php echo $dm?>"><img src="<?php echo $dm?>/images/logo_file.png" alt="able bank" width="100"></a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#structure">OVERVIEW</a></li>
            <li><a href="#platform">PLATFORM</a></li>
            <li><a href="#Sale">TOKEN SALE</a></li>
            <li><a href="#roadmap">ROADMAP</a></li>
            <li><a href="#team">TEAM</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#" class="beta-styles" style="color: black" target="_blank">WHITEPAPER</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <div style="clear: both;">
            <img src="<?php echo $dm?>/images/logo_file.png" style="height: 100px;" alt="able bank">
          </div>
          <h1><span style="color: #ff5e00;"></span></h1><h1 style="margin-top: 30px;">Global CryptoCurrency Bank</h1>
          <p>Asia's First Global Block Chain Expert Bank</p>

          <div class="no-box">
            <div class="box__title">Token PreSale Event will start in:</div>
            <div class="box-container">
              <div class="box-container__box">
                <span id="clock-day" class="box-container__digit">00</span>
                <div class="box-container__description">days</div>
              </div>
              <div class="box-container__box">
                <span id="clock-hour" class="box-container__digit">00</span>
                <div class="box-container__description">hours</div>
              </div>
              <div class="box-container__box">
                <span id="clock-min" class="box-container__digit">00</span>
                <div class="box-container__description">minutes</div>
              </div>
              <div class="box-container__box">
                <span id="clock-sec" class="box-container__digit box-container__digit-last">00</span>
                <div class="box-container__description">seconds</div>
              </div>
            </div>
          </div>

          <div>
            <a href="#" id="kakaoTalk"><span>Join KaKao Talk</span><br><span>(pw 1234)</span></a>
            <a href="<?php echo $dm?>/member/login.html" id="signIn"><span>Sign In</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about able -->
  <section id="about" class="section">
    <div class="container-fluid text-center">
      <h2>ABOUT</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div class="col-md-6 text-center col-box">
          <p class="align-middle">
            <span class="main-text-type01">"<span class="main-font-up">A</span>pplying <span class="main-font-up">BL</span>ockchain to <span class="main-font-up">E</span>xtend the finace"</span><br><br>
            <span class="main-text-type02"><span>ABLE PROJECT</span>는 세계최대 "블록체인 전문은행"을 설립 합니다.</span>
            <br><br>
            ABLE PROJECT는 암호화폐기반 예금/대출상품의 설계(Smart Contract)를 통해
            <br>
            주체적으로 <span>암호화폐시장</span>의 <span>유동성</span>을 <span>제고</span>할 것입니다.
            <br><br>
            대기자금은 Minning, Trading, IB(NPL, Derivatives 등)에 <span class="color-text">분산운용</span>하여
            <br>
            ABLE PROJECT의 <span>수익</span>을 <span>극대화</span> 시켜줍니다.
            <br><br>
            ABLE PROJECT는 암호화폐의 금융화 안전한 관리 이외 VR, AI, 바이오 등<br>
            <span>4차 산업혁명시대를 이끌어갈 새로운 인프라를 조성할 것입니다.</span>
            <br><br>
            <span class="about-small">(ABLE Coin은 ERC-20토큰으로 Pre-Sales 및 ICO를 통해 발행됩니다)</span>
          </p>
        </div>
        <div class="col-md-6">
          <img src="<?php echo $dm?>/images/image1-n.png" class="re-image01 margin-center" />
        </div>
      </div>
      <!--<div class="idea-text text-center col-md-10 col-md-offset-1">
        <h2>ABOUT</h2>
        <p>
          <span class="main-text">"<span class="main-font-up">A</span>pplying <span class="main-font-up">BL</span>ockchain to <span class="main-font-up">E</span>xtend the finace"</span><br><br>
          <span class="main-text"><span>ABLE PROJECT</span>는 세계최대 "블록체인 전문은행"을 설립 합니다.</span>
          <br><br>
          ABLE PROJECT는 암호화폐기반 예금/대출상품의 설계(Smart Contract)를 통해
          <br>
          주체적으로 <span>암호화폐시장</span>의 <span>유동성</span>을 <span>제고</span>할 것입니다.
          <br><br>
          대기자금은 Minning, Trading, IB(NPL, Derivatives 등)에 <span class="color-text">분산운용</span>하여
          <br>
          ABLE PROJECT의 <span>수익</span>을 <span>극대화</span> 시켜줍니다.
          <br><br>
          ABLE PROJECT는 암호화폐의 금융화 안전한 관리 이외 VR, AI, 바이오 등<br>
          <span>4차 산업혁명시대를 이끌어갈 새로운 인프라를 조성할 것입니다.</span>
          <br><br>
          <span class="about-small">(ABLE Coin은 ERC-20토큰으로 Pre-Sales 및 ICO를 통해 발행됩니다)</span>
        </p>
      </div>-->
    </div>
  </section>

  <!-- video preview -->
  <section id="video" class="section">
    <div class="container-fluid text-center">
      <h2 class="white">Preview</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div class="col-md-6 video-box"">
          <iframe width="100%" height="480" src="https://www.youtube.com/embed/k53LUZxUF50" frameborder="0" allowfullscreen class="margin-center"></iframe>
        </div>
        <div class="col-md-6 video-text-box">
          <h3 class="white main-text">ABLE PROJECT</h3>
          <div class="margin-40">
            <p class="text-left"><span>ABLE Project</span>는 최초의 블록체인 전문은행으로 VR, AI 로봇 등 4차 산업혁명 기업들과 연계하고 있습니다. 그리고 협력 거래소 <span>BIT BANK</span>를 통해 ABLE 코인의 빠른 거래소 상장을 보장합니다.</p>
            <p class="text-left">ABLE Project를 통해 이용자는 암호화폐의 <span>예금, 대출, 자산운용</span>이 가능하며, 알트코인이 무료환전 혜택을 누릴 수 있습니다. ABLE Project는 기부자에게 매년 은행수익의 40%를 배분합니다.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- needs -->
  <section id="needs" class="section">
    <div class="container-fluid text-center">
      <h2>NEEDS</h2>
      <div class="divider"></div>
      <p class="margin-90">
        <span class="main-text">현재 암호화폐시장이 안정될수록 거래소보다 "전문은행"이 절실히 필요해 질 것입니다</span><br><br>
        ABLE은 블록체인 뱅크 플랫폼으로써 강화된 보안, 편리한 환전, 거치형 예금 상품 등<br>
        접근성이 뛰어난 뱅크 플랫폼을 지향하고 있습니다.
        <br><br>
        앞으로 뱅크 플랫폼은 계속 성장 할 것입니다.<br>
        ABLE은 국내, 싱가포르, 아시아 전 국가로 지점을 확대하고, 초기시장을 선점할 것입니다.
        <br>
      </p>
    </div>
  </section>

  <!-- structure 구조 -->
  <section id="structure" class="section">
    <div class="container-fluid text-center">
      <h2>Business structure</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div class="col-md-6">
          <img src="<?php echo $dm?>/images/image2-n.png" class="re-image01 margin-center" />
        </div>
        <div class="col-md-6 text-center col-box">
          <h3 class="main-text">ABLE BANK</h3>
          <div class="margin-40">
            <p>
              ABLE Project는 블록체인 전문은행으로 고객들의 암호화폐<br>
              자산을 <span>보험</span> 및 <span>법률 자문</span>을 통해 안전하게 보호합니다.
            </p>
            <p>
              블록체인을 기반으로 <span>스마트 계약</span>을 활용하여 <span>은행서비스</span>와<br>
              <span>다양한 자산운용 상품</span>을 제공합니다.
            </p>
            <p>
              ABLE Project 기부자는 은행 및 자산운용에서 <span>발생한 수익</span>을<br>
              지분에 비례하여 <span>분배</span> 받습니다.
            </p>
            <p>
              ICO를 참가한 기부자는 AIR-DROP, VIP 카드발급, PAYBACK 등<br>
              다양한 혜택을 받을 수 있습니다.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 에이블 코인 -->
  <!--<section id="project" class="section">
    <div class="container">
      <div class="features-text text-center">
        <h2>ABLE PROJECT</h2>
        <div class="divider"></div>
      </div>
      <div>
        <h4 class="text-white text-center main-description">
          우리는 블록체인 전문은행으로 고객들의 암호화폐 자산을 보호하고자 합니다.<br>
          블록체인을 기반으로 스마트컨트랙트를 활용하여 은행서비스와 자산관리상품을 제공합니다.<br>
          ABLE Project는 암호화폐 보유 고객들의 자산을 안전하게 지켜줍니다.<br>
          ABLE Project 참여자는 은행 및 자산관리상품에서 발생한 수익과 POS로써의 수익을 분배 받습니다.<br>
          향후 진행하는 ICO시 Airdrop, VIP 카드발급 및 뱅크카드 PAY BACK 등 혜택을 받을 수 있습니다.
        </h4>
      </div>
      <div class="row start-content">
        <div class="border-box">ABLE BANK 소유자</div>
        <div class="arrow-box"><span class="glyphicon">&#xe259;</span></div>
        <div class="border-box">금융상품 / 트레이딩 / 마이닝 이용 가능</div>
        <div class="arrow-box"><span class="glyphicon">&#xe259;</span></div>
        <div class="border-box">ABLE 코인 소유자 월말 수익 배당</div>
        <div class="arrow-box"><span class="glyphicon">&#xe259;</span></div>
        <div class="border-box">비트뱅크 거래소에서 코인 매매 가능</div>
      </div>
  </section>-->

  <!-- 에이블 코인 -->
  <section id="service" class="section">
    <div class="container-fluid">
      <div class="features-text text-center">
        <h2>SERVICE</h2>
        <div class="divider"></div>
      </div>
      <div class="row margin-90">
        <div class="col-md-4 col-sm-4 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#e84545">account_balance</i>
          <div class="features-content">
            <h3>Banking services</h3>
            <p>
              현시대에서 블록체인은 미래를 바꿀 기술 중 하나로 꼽히고 있습니다. ABLE project는 암호화폐의 예금 및 대출, 자산관리 서비스를 제공하는 블록체인 전문 은행입니다. 블록체인 시스템의 투명성, 불변성, 보안 및 신뢰성을 기반으로 은행순수익의 40%를 프로젝트 참여자들에게 공유합니다. ABLE Project는 블록체인 스마트 컨트랙트를 기반으로 암호화폐 예금 및 대출 서비스를 실현하며, 암호화폐 자산관리 서비스로  벤처투자, 채권, 마이닝, 알트코인 트레이딩, NPL부동산, ICO 등의 다양한 금융상품 서비스를 제공합니다.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#e84545">trending_up</i>
          <div class="features-content">
            <h3>Asset Management</h3>
            <p>
              ABLE은 18년 1분기에 파트너사인 소셜 거래소 비트뱅크에 상장될 예정입니다. ICO 이후 상장까지 시간을 단축시켜 ABLE 자산관리의 어려움을 최소화 합니다.
              Pre-Sale과 ICO로 발행된 토큰은 비트뱅크 거래소의 지갑에 전송되기 때문에 ICO이후 거래소 지갑으로 전송해야 하는 번거로움과 개인 월넷의 해킹위험을 방지할 수 있습니다.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#e84545">lock</i>
          <div class="features-content">
            <h3>Security And Stability</h3>
            <p>
              모든 서비스는 아마존클라우드(AWS)에 올려 보관됩니다. AWS 클라우드가 제공하는 각종 보안 서비스를 활용합니다. 암호화폐 보관은 콜드월렛에서 코인환전은 핫월렛에서 진행하는 분리저장시스템을 활용합니다. AWS 클라우드의 VPC(Virtual Private Cloud)에 핫월렛의 프라이빗키(Private key, 비트코인 거래를 위해 개인임을 식별할 수 있는 암호화된 가상 열쇠)의 일부만 올려두는 보안 정책을 사용합니다.
            </p>
          </div>
        </div>
      </div>
  </section>

  <section id="platform" class="section">
    <div class="container-fluid">
      <div>
        <h2>PLATFORM ARCHITECTURE</h2>
        <div class="divider"></div>
        <h3>이더리움 스마트컨트랙트에 기반하여 금융상품과 거래내역을 메인넷에 기록하며 고객의 자산운용과 투명성을 극대화 합니다.</h3>
        <div class="row">
          <div class="col-md-6 col-sm-12 type-box">
            <h4>ABLE Application</h4>
            <p>
              ABLE Application에서 <span>사용자</span>들은 <span>스마트 계약</span>으로 작성된 금융상품들을 <span>열람</span>하며, <span>신청</span> 할 수 있습니다.
              <span>편리한 이용</span>을 위한 <span>Web</span> 및 <span>SmartPhone App</span> 어플리케이션을 제공합니다.
            </p>
          </div>
          <div class="col-md-6 col-sm-12 type-box">
            <h4>ABLE Framework</h4>
            <p>
              ABLE Framework에서 <span>예금</span> 및 <span>대출</span>, <span>자산운용</span>, <span>수익배분</span>을 위한 금융상품 스마트 계약을 설계합니다. 설계된 금융상품은 <span>Application</span>을 통해 사용자에게 공개되며, 사용자의 신청에 따라 <span>Infrastructure</span>에 등록 됩니다.
            </p>
          </div>
          <div class="col-md-6 col-sm-12 type-box">
            <h4>ABLE API</h4>
            <p>
              ABLE 시스템 구조가 <span>계층화</span> 되어 있고, 계층에 따라 접근 가능한 구성원이 다르기 때문에, 각 계층 및 각 요소는 다음과 같은 표준 기반의 ABLE API로 통신한다.
              각 API는 공개 수준에 따라 <span>Public API</span>, <span>Protected API</span>, <span>Private API</span>로 구분되며, 각 API의 접근권한은 <span>사용자</span>, <span>운영자/관리자</span>, <span>시스템</span> 개발자로 구분된다.
            </p>
          </div>
          <div class="col-md-6 col-sm-12 type-box">
            <h4>ABLE Ethereum Infrastructure</h4>
            <p>
              암호화폐 게이트웨이 및 블록체인 시스템으로 구성됩니다.초기단계는 <span>Ethereum</span>을 사용하며, ABLE Framework를 구축합니다. 이후 <span>ABLE 전용 블록체인</span>으로 대체하여 향상된 뱅킹 및 자산운용 서비스를 제공합니다.
            </p>
          </div>
        </div>
        <div class="imageBox">
          <img src="<?php echo $dm?>/images/image3-n.png" class="re-image100 margin-center" />
        </div>
      </div>
    </div>
  </section>

  <!-- token sale -->
  <section id="Sale" class="section">
    <div class="container border-box">
      <div>
        <h2>TOKEN SALE</h2>
        <div class="divider"></div>

        <div class="row margin-90">
          <div class="col-lg-4 col-md-4 col-xs-4 text-left td-01"></div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-02">1<span class="font-down">ST</span>&nbsp;&nbsp;</div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-03">2<span class="font-down">ED</span>&nbsp;&nbsp;</div>
        </div>
        <div class="row margin-20">
          <div class="col-lg-4 col-md-4 col-xs-4 text-left td-01">PRESALE</div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-02">6,000 ETH&nbsp;&nbsp;</div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-03">24,000 ETH&nbsp;&nbsp;</div>
        </div>
        <!--<div class="row margin-20">
          <div class="col-lg-4 col-md-4 col-xs-4 text-left td-01">ICO</div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-02">30,000 ETH&nbsp;&nbsp;</div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-03">30,000 ETH&nbsp;&nbsp;</div>
        </div>
        <div class="row margin-20">
          <div class="col-lg-4 col-md-4 col-xs-4 text-left td-01">TOKEN SUPPLY</div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-02">120,000 ETH<span>*</span></div>
          <div class="col-lg-4 col-md-4 col-xs-4 text-right td-03">800,000 ETH<span>*</span></div>
        </div>-->
      </div>
    </div>
    <div class="container bottom-box">
      <div class="row">
        <div class="col-md-6 limit-per-zone">
          <h3>USE OF PROCEEDS</h3>
          <div class="row limit-box">
            <div class="col-md-4">
              <div style="color:#fff;background-color:#1f2537;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#30384f;width:80%;height:20px;line-height:25px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#5b74b9;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#394f74;width:80%;height:60px;line-height:60px;text-align:center">15%</div>
              <div style="color:#fff;background-color:#1dc5c8;width:80%;height:240px;line-height:240px;text-align:center">60%</div>
            </div>
            <div class="col-md-8 color-define-zone">
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#1f2537;"></span>
                <span class="color-box-text">FOUNDATION</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#30384f;"></span>
                <span class="color-box-text">MARKETING &amp; STRATEGY PARTNERS</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#5b74b9;"></span>
                <span class="color-box-text">TEAM, ADVISOR, &amp; EARLY CONTRIBUTOR</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#394f74;"></span>
                <span class="color-box-text">RESERVE</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#1dc5c8;"></span>
                <span class="color-box-text">TOKEN SALE</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 limit-per-zone">
          <h3>TOKEN ALLCATION</h3>
          <div class="row limit-box">
            <div class="col-md-4">
              <div style="color:#fff;background-color:#6f7d8f;width:80%;height:240px;line-height:240px;text-align:center">60%</div>
              <div style="color:#fff;background-color:#5b74b9;width:80%;height:40px;line-height:45px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#394f74;width:80%;height:40px;line-height:45px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#30384f;width:80%;height:20px;line-height:25px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#636b81;width:80%;height:20px;line-height:25px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#1f2537;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
            </div>
            <div class="col-md-8 color-define-zone">
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#6f7d8f;"></span>
                <span class="color-box-text">BANKING</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#5b74b9;"></span>
                <span class="color-box-text">RESERVE</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#394f74;"></span>
                <span class="color-box-text">OPRATION EXPENSE</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#30384f;"></span>
                <span class="color-box-text">MARKETING EXPENSE</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#636b81;"></span>
                <span class="color-box-text">BIZ DEVELOPMENT</span>
              </div>
              <div>
                <span style="display:inline-block;width:20px;height:20px;background-color:#1f2537;"></span>
                <span class="color-box-text">STRATEGY PARTNERS</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- road map -->
  <section id="roadmap" class="section">
    <div class="container">
      <div class="col-md-12  text-center">
        <h2>ROADMAP</h2>
        <div class="divider"></div>
        <div class="row margin-90">
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2017. 4Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">대기자금 비트코인 &부동산<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;중심 투자</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2018. 1Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">거래소상장(BITBANK)</span><br>
              <span class="text-cicle"></span><span class="text-left-padding">대기자금 투자수익 월별 배분 시작</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2018. 2Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">블록체인 전문은행 오픈<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(예금,대출 서비스 시작)</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2018. 3Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">자산운용 금융상품 서비스 시작</span>
            </p>
          </div>

          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2018. 4Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">ABLE BANK 수익배분</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2019</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">PoS 기반 ABLE 메인네트워크 개발</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2020</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">PoS 기반 ABLE 메인네트워크<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;오픈 및 PoS 보상</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 커뮤니티 -->
  <section id="ask" class="section">
    <div class="container">
      <div class="col-md-12  text-center">
        <h2>COMMUNITY</h2>
        <div class="divider"></div>
        <div class="col-sm-6 col-lg-3" style="margin-bottom: 30px;">
          <a href="http://blog.naver.com/kblockchain/221115119554" target="_blank">
            <img src="<?php echo $dm?>/images/socials/blog.jpg" alt="Blog"  />
          </a>
        </div>
        <div class="col-sm-6 col-lg-3" style="margin-bottom: 30px;">
          <a href="https://www.facebook.com/Kblockchains/" target="_blank">
            <img src="<?php echo $dm?>/images/socials/fb.png" alt="Facebook"  />
          </a>
        </div>
        <div class="col-sm-6 col-lg-3" style="margin-bottom: 30px;">
          <a href="https://twitter.com/kblockchains" target="_blank">
            <img src="<?php echo $dm?>/images/socials/twitter.png" alt="Twitter"  />
          </a>
        </div>
        <div class="col-sm-6 col-lg-3" style="margin-bottom: 30px;">
          <a href="https://kblockchain.slack.com/" target="_blank">
            <img src="<?php echo $dm?>/images/socials/slack.png" alt="Slack"  />
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="section">
    <div class="container">
      <div class="col-md-12  text-center">
        <h2>TEAM</h2>
        <div class="divider"></div>
        <div class="col-sm-12 col-lg-12">
          <div class="contents">
            <div id="acc-1">
              <div class="title sub0 on">
                <div class="section-title">ABLE PROJECT</div>
                <span class="b img"></span>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="imageBox ceo"></div>
                  <div class="nameBox">M.S KIM</div>
                  <div class="catBox">CEO / Founder </div>
                  <p class="jobBox">국세 공무원 출신으로 공군장교를 거쳐 삼성 재무팀에서 근무했다. 부동산 NPL 전문가이자  암호화폐 투자 전문카페를 운영중인 자산운용 전문가이다. 현재 케이블록체인 CEO로 재직중이다.</p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox cto"></div>
                  <div class="nameBox">Y.D YOON</div>
                  <div class="catBox">CTO</div>
                  <p class="jobBox">유니스트에서 컴퓨터공학 및 전자공학을 전공하고, 카이스트에서 Internet of Things (IoT) 연구를 통해 석사학위를 받았다. 이후 IoT 오픈 소스 플랫폼인 Open Language for Internet of Things (OLIOT) 개발에 참여하고 관리 중이다. 현재 카이스트에서 박사과정 중으로 Blockchain을 적용한 IoT 플랫폼 연구를 수행 중이다.</p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox cfo"></div>
                  <div class="nameBox">Sukyu Cheah</div>
                  <div class="catBox">CFO</div>
                  <p class="jobBox">University of California, San Diego와 고려대학교 경제학과를 졸업하였으며, 삼성 재경팀에서 근무한 경력이 있다.</p>
                </div>
              </div>
            </div>
            <div id="acc-2">
              <div class="title sub0 on">
                <div class="section-title">BIT BANK</div>
                <span class="b img"></span>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="imageBox bit-ceo"></div>
                  <div class="nameBox">JW. NHO</div>
                  <div class="catBox">CEO / Founder </div>
                  <p class="jobBox">
                    가상화폐 트레이딩 및 마이닝을 하며 블록체인 연구소를 설립하고 소셜 트레이딩 가상화폐 거래소 비트뱅크를 창업하였다. 삼성전자에서 사용자 경험에 대한 개발연구 및 디자인을 하며 다양한 서비스를 만들어낸 경험이 있다. 현재는 블록체인 관련 특허 및 강의 진행중에 있다.
                  </p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox bit-cso"></div>
                  <div class="nameBox">HANNA GANG</div>
                  <div class="catBox">CSO</div>
                  <p class="jobBox">
                    소셜 트레이딩 서비스 ‘비트뱅크’에서 고객을 관찰해 가치를 발굴하고, 이를 서비스에 녹여내거나 미디어를 통해 고객에게 전달하는 일을 하고 있다.
                    IT 컨설팅 회사에 근무했으며, 은행, 보험, 캐피탈 등 다양한 금융 분야의 고객 경험을 분석하고, 전략 및 서비스 설계로 반영하는 일을 했다.
                    세상의 흐름 속 숨은 인사이트를 발굴하는 것에도 관심이 많아 현대 경제연구원에서 객원 칼럼니스트로 활동 중이다.
                  </p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox bit-cto"></div>
                  <div class="nameBox">PHILGOO KANG</div>
                  <div class="catBox">CTO</div>
                  <p class="jobBox">
                    한양대학교에서 컴퓨터공학과를 전공했다.
                    SK에서 신규 결제 플랫폼 총괄하고, 인테리어 소셜네트워크 서비스까지
                    구축한 경험이 있다.
                    현재 블록체인 거래소인 비트뱅크 CTO로 재직중이다.
                  </p>
                </div>
              </div>
            </div>
            <div id="acc-3">
              <div class="title sub0 on">
                <div class="section-title">DEVELOPMENT DEPARTMENT</div>
                <span class="b img"></span>
              </div>

              <div class="row">
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">JY. Kim</div>
                  <div class="catBox">Team Leader</div>
                  <p class="jobBox">
                    인프라 엔지니어, 업무 인프라 아키텍처 설계 및 트러블 슈팅 전문가로 ABLE PROJECT의 개발을 총괄하고 있다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">J.A Beak</div>
                  <div class="catBox">Infra engineer</div>
                  <p class="jobBox">
                    Database와 WAS 전문가로서 대기업에서 8년동안 근무하였으며 차세대 ERP 및 각종 프로젝트에 참여하였다.
                    프로젝트에서 인프라 아키텍쳐 설계 및 트러블 슈팅, 튜닝을 담당하고 있다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">J.W LEE</div>
                  <div class="catBox">Front Engineer</div>
                  <p class="jobBox">
                    Application 개발자로 소셜커머스와 주차관련 서비스를 개발하였고, O2O 스타트업에서 기획, 개발, 투자에 참여 하였다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">D.S NGung</div>
                  <div class="catBox">Server Engineer</div>
                  <p class="jobBox">
                    웹개발자로 13년간 소셜커머스/음악플랫폼/ERP 등의 서비스 및 관리 경험을 통하여 현재는 ABLE PROJECT의 Backend architecture를 설계하고 application의 기능적인 부분을 전담하고 있다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">M.J Lee</div>
                  <div class="catBox">Designer</div>
                  <p class="jobBox">
                    웹디자이너로 중견벤처회사의 웹디자인팀을 총괄하였다.
                  </p>
                </div>
              </div>
            </div>
            <div id="acc-4">
              <div class="title sub0 on">
                <div class="section-title">PLANNING & MARKETING DEPARTMENT</div>
                <span class="b img"></span>
              </div>

              <div class="row">
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">SANG YEON HA</div>
                  <div class="catBox">Finance Specialis</div>
                  <p class="jobBox">
                    상품기획(전 시중은행 금융상품기획)
                    상품은 금융뿐 아니라 전산업군에 미치는 기본요소다. 블록체인을 기반하는 Bank platform의 활성화에 있어 탄탄한 상품라인업은 향후 ABLE만의 차별화된 경쟁력이 될 것이라 확신한다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">J.S Kim</div>
                  <div class="catBox">Finance Specialis</div>
                  <p class="jobBox">
                    경영학을 전공하였고 자산관리 및 암호화폐 분석을 주로 하고 있다. 미래수익구조에 대한 계획을 세우고 Project를 수행한다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">Erin Woo</div>
                  <div class="catBox">Marketer</div>
                  <p class="jobBox">
                    온라인 마케터로 콘텐츠 마케팅부터 온라인광고까지 두루 경험하였다. 스타트업 마케팅에 특화되어 있다.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- faq -->
  <section id="faq" class="section">
     <div class="container">
         <div class="text-center">
           <h2>FAQ</h2>
           <div class="divider"></div>
         </div>

         <div class="col-lg-12 ">
            <div id="1_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                ABLE Project란 무엇인가요?
              </div>
              <div id="1_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="1_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
                ABLE project는 블록체인상에서 암호화폐의 예금 및 대출, 자산관리 서비스를 제공하는 뱅크 솔루션입니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

            <div id="2_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                참가자에 대한 국적 및 제한이 있습니까?
              </div>
              <div id="2_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="2_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
                따로 제한은 없습니다. 다만, 국가 규제에 따른 ICO 금지국가(ex. 미국, 중국 등)는 참여가 불가능합니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

            <div id="3_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                Pre-Sale 참여시 ICO에 비해 어떤 혜택이 있나요?
              </div>
              <div id="3_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="3_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
                1차 Pre-Sale은 20%, 2차 Pre-Sale은 15%의 추가 코인을 배분 받을수 있습니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

            <div id="4_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                토큰 구매 기회는 총 몇번 인가요?
              </div>
              <div id="4_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="4_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
                Pre-Sale 2회, ICO 3회 총 5회의 구매 기회가 있습니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

            <div id="5_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                ABLE PROJECT에 참여하려면 어떻게 해야 하나요?
              </div>
              <div id="5_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="5_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
                PRE SALE과 ICO를 통해 참여할 수 있습니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

           <div id="6_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               참여는 언제부터 시작하나요?
             </div>
             <div id="6_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="6_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               11월 중순 PRESALE을 시작으로 12월 ICO를 통해 참여가능합니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="7_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               Pre-Sale과 ico 진행시 배포되는 토큰수는 얼마인가요?
             </div>
             <div id="7_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="7_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               Pre-Sale로 약 1억 2천만개 ico에서 약 2억5천만개의 코인이 발행 되며, 하드캡은 1억개 정도입니다
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="8_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               코인이 모두 배포되지 않으면 어떻게 되나요?
             </div>
             <div id="8_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="8_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               회차별로 배포되지 않은 코인은 다음회차로 넘어가며 최종까지 배포되지 않은 코인은 소각 예정입니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="9_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               어떤 암호화폐로 ABLE PROJECT를 참여할수 있나요?
             </div>
             <div id="9_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="9_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               이더리움(ETH)으로만 참여 가능합니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="10_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               거래소는 언제부터 사용가능한가요?
             </div>
             <div id="10_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="10_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               2017년 12월 비트뱅크(BITBANK) 상장을 시작으로 2018년 상반기에는 비트렉스 및 주요 거래소에 상장예정입니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="11_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               언제 메인넷이 진행되나요?
             </div>
             <div id="11_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="11_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               2018년 상반기에 이더리움 기반의 뱅킹서비스 오픈을, 자체 메인넷은 2019년 예정입니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="12_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               홈페이지에서 본인인증을 할수 없게 되면 ABLE PROJECT에 참여하기 어려운가요?
             </div>
             <div id="12_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="12_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               본인인증 없어도 참여가능합니다. 다만, 향후 본인인증을 할 수 없을시 불이익이 있을수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="13_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               본인인증 방식은 어떻게 되나요?
             </div>
             <div id="13_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="13_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               E-mail이나 휴대폰 인증을 통해 본인인증을 할 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="14_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               비밀번호를 잊어버리면 찾을 수 있나요?
             </div>
             <div id="14_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="14_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12 white" style="margin-top:20px;color:#fff;">
               E-mail이나 휴대폰 인증을 통해 비밀번호를 초기화 할 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

         </div>
     </div>
   </section>


  <!-- partner -->
  <section id="asSeenIn" class="section">
    <div class="container">
      <div class="text-center">
        <h2>PARTNER & CUSTMOR</h2>
        <div class="divider"></div>
        <div class="col-sm-12 col-lg-12 col-xs-12 margin-90">
          <a href="#" target="_blank"><img class="box-1" src="<?php echo $dm?>/images/partner/pa-011.png" /></a>
          <!--<a href="#" target="_blank"><img class="box-2" src="<?php echo $dm?>/images/partner/pa-08.png" /></a>-->
          <a href="#" target="_blank"><img class="box-3" src="<?php echo $dm?>/images/partner/pa-06.png" /></a>
          <a href="#" target="_blank"><img class="box-4" src="<?php echo $dm?>/images/partner/pa-05.jpg" /></a>
          <a href="#" target="_blank"><img class="box-5" src="<?php echo $dm?>/images/partner/pa-07.gif" /></a>
          <a href="#" target="_blank"><img class="box-6" src="<?php echo $dm?>/images/partner/pa-03.gif" /></a>
          <a href="#" target="_blank"><img class="box-7" src="<?php echo $dm?>/images/partner/pa-04.jpg" /></a>



        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-col center">
          <h5>ABLE</h5>
        </div>
      </div>
      <div class="container">
        <p>&copy; Copyright 2017 - ABLE PROJECT</p>
      </div>
    </div>
  </footer>
  <script src="<?php echo $dm?>/js/bootstrap.min.js"></script>
  <script src="<?php echo $dm?>/js/jquery.flexslider-min.js"></script>
  <script src="<?php echo $dm?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo $dm?>/js/fadeInScroll.jQuery.js"></script>
  <script src="<?php echo $dm?>/js/modernizr.js"></script>
  <script src="<?php echo $dm?>/js/main.js?d=201710201122"></script>
  <script src="<?php echo $dm?>/js/scrollSpy.js" type="text/javascript"></script>
  <script src="<?php echo $dm?>/js/scrollto.js" type="text/javascript"></script>
  <script src="<?php echo $dm?>/js/anim_scroll.js" type="text/javascript"></script>
  <script>
      /////////////////////
      ////time D-day
      ///////////////////
      var icoDay = document.getElementById("clock-day");
      var icoHour = document.getElementById("clock-hour");
      var icoMin = document.getElementById("clock-min");
      var icoSec = document.getElementById("clock-sec");

      function getTimeIcoDate(){
          var dat1 = new Date(); //현재날짜
          var dat2 = new Date(2017, 10, 15); //월에서 1 빼줘야 함

          var diff = dat2 - dat1; //날짜 빼기

          var currSec = 1000; // 밀리세컨
          var currMin = 60 * 1000; // 초 * 밀리세컨
          var currHour = 60 * 60 * 1000; // 분 * 초 * 밀리세컨
          var currDay = 24 * 60 * 60 * 1000; // 시 * 분 * 초 * 밀리세컨

          var day = parseInt(diff/currDay); //d-day 일
          var hour = parseInt(diff/currHour); //d-day 시
          var min = parseInt(diff/currMin); //d-day 분
          var sec = parseInt(diff/currSec); //d-day 초

          var viewHour = hour-(day*24);
          var viewMin = min-(hour*60);
          var viewSec = sec-(min*60);

          icoDay.innerText  = day; //날짜
          icoHour.innerText = viewHour; //시
          icoMin.innerText  = viewMin; //분
          icoSec.innerText  = viewSec; //초

          setTimeout(getTimeIcoDate, 1000);
      }

      getTimeIcoDate();


      function get_version_of_IE () {

          var word;
          var version = "N/A";

          var agent = navigator.userAgent.toLowerCase();

          // IE old version ( IE 10 or Lower )
          if ( navigator.appName == "Microsoft Internet Explorer" ) word = "msie ";

          else {
              // IE 11
              if ( agent.search( "trident" ) > -1 ) word = "trident/.*rv:";

              // Microsoft Edge
              else if ( agent.search( "edge/" ) > -1 ) word = "edge/";

              // 그외, IE가 아니라면 ( If it's not IE or Edge )
              else return version;
          }

          var reg = new RegExp( word + "([0-9]{1,})(\\.{0,}[0-9]{0,1})" );

          if (  reg.exec( agent ) != null  ) version = RegExp.$1 + RegExp.$2;

          return version;
      }

      var ie_ver = get_version_of_IE();

      if(ie_ver == "11.0"){
          var canvasEl = document.querySelector("canvas");
          console.log(canvasEl);
      }
      var canvasEl = document.querySelector("canvas");
      var mainEl = $("#mainSection");


      //canvas height get And div up
      var fixMoveUpHeight = mainEl.innerHeight()
      canvasEl.style.marginTop = -(fixMoveUpHeight);

      //canvas width 값 보정
      var fixCurrentWidth = parseInt(canvasEl.style.width) - 15;
      canvasEl.style.width = fixCurrentWidth;


  </script>
</body>
</html>
