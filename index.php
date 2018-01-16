<?php
  include(dirname(__FILE__).'/library/common.php'); //domain check
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ABLE</title>
    <meta name="Keywords" content="암호화폐, 은행, 예금, 자산관리, 전문은행, 에이블, 에이블 프로젝트, kblcokchain, able, cryptocoin mining, cryptocurrency, bitcoin, ethereum, ico, blockchain, bank, project, able-project, able_project, able.io" />
    <meta name="robots" content="index, follow, noodp" />
    <meta name="author" content="able-project.io" />
    <meta name="copyright" content="(c) 2017 able-project.io. All rights reserved" />
    <meta name="description" content="ABLE PROJECT는 암호화폐의 예금 및 대출, 자산관리(NPL부동산,트레이딩,마이닝) 서비스를 제공하는 블록체인 전문 은행입니다." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:url" content="https://www.able-project.io/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ABLE-PROJECT" />
    <meta property="og:description" content="Asia's First Global Block Chain Expert Bank" />
    <meta property="og:image" content="<?php echo $dm?>/images/logo_file_thum.v1.png?d=2017102012232" />
    <meta property="og:width" content="400" />
    <meta property="og:height" content="103" />

    <link rel="canonical" href="https://www.able-project.io" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/flexslider.css" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/main.css?d=20170925131551111" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/responsive.css?d=20170925141211111" />
    <link rel="shortcut icon" href="<?php echo $dm?>/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo $dm?>/favicon.ico" type="image/x-icon" />

  <!-- Animated background color -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="<?php echo $dm?>/js/three.min.js"></script>
  <script src="<?php echo $dm?>/js/projector.js"></script>
  <script src="<?php echo $dm?>/js/canvas-renderer.js"></script>
  <script src="<?php echo $dm?>/js/projector.js"></script>
  <script src="<?php echo $dm?>/js/canvas-renderer.js"></script>
  <script src="<?php echo $dm?>/js/color.js"></script>
  <script src="<?php echo $dm?>/js/projector.js"></script>
  <script src="<?php echo $dm?>/js/canvas-renderer.js"></script>
  <script src="<?php echo $dm?>/js/canvas-init.js?d=2017"></script>
  <!-- Custom styles for this template -->
</head>
<body>
<script type="text/javascript">
    if(!iOS()){
        var mouseX = 0, mouseY = 0,
            windowHalfX = window.innerWidth / 2,
            windowHalfY = window.innerHeight / 2,
            camera, scene, renderer;
        init();
        animate();
    }
</script>
  <section id="mainSection">
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
            <!--<li><a href="<?php echo $dm?>/library/whitepaper.php" class="beta-styles" style="color: black" target="_blank">WHITEPAPER</a></li>-->
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <div style="clear: both;">
            <img src="<?php echo $dm?>/images/logo_file.png" class="main-block-logo" alt="able bank">
          </div>
          <h1 style="margin-top: 100px;">The Global Block Chain Dedicated Bank</h1>
          <p>Asia's First Block Chain Bank</p>

          <!--<div class="no-box">
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
          </div>-->

          <!--<div>
              <a href="#" id="kakaoTalk_v1"><span>Join KaKao Talk</span></a>
              <?php if($dm == "http://dev.able-project.io"){?>
                  <a href="/member/login.php" id="signIn"><span>SIGN IN</span></a>
              <?php }else{?>
                  <a href="#" id="signIn"><span>Sign In</span></a>
              <?php }?>
          </div>-->

          <!--<div class="coin-limit-box">
              <span class="coin-limit-box-title">READY 29,640,000 ABLE&nbsp;&nbsp;|&nbsp;&nbsp;1ETH = 4940 ABLE</span>
              <div class="progress-coin">
                  <span class="use-progess"></span>
                  <span class="avail-progess"></span>
              </div>
              <span class="use-text"><span class="current-able-token"></span> ABLE</span>
          </div>-->
        </div>
      </div>
    </div>
  </section>

  <!-- about able -->
  <section id="about" class="section">
    <div class="container text-center">
      <h2>ABOUT</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div id="desktop-view-box" class="col-md-6 text-center col-box">
          <p class="align-middle">
            <span class="main-text-type01">"<span class="main-font-up">A</span>pplying <span class="main-font-up">BL</span>ockchain to <span class="main-font-up">E</span>xtend the finance"</span><br><br>
            <span class="main-text-type02"><span>ABLE PROJECT</span>는 세계최대 "블록체인 전문은행"을 설립 합니다.</span><br />
            ABLE PROJECT는 암호화폐기반 예금/대출상품의 설계(Smart Contract)를 통해
            <br>
            주체적으로 <span>암호화폐시장</span>의 <span>유동성</span>을 <span>제고</span>할 것입니다.
            <br><br>
            대기자금은 Mining, Trading, IB(NPL, Derivatives 등)에 <span class="color-text">분산운용</span>하여
            <br>
            ABLE PROJECT의 <span>수익</span>을 <span>극대화</span> 시켜줍니다.
            <br><br>
            ABLE PROJECT는 암호화폐의 금융화 안전한 관리 이외 VR, AI, 바이오 등<br>
            <span>4차 산업혁명시대를 이끌어갈 새로운 인프라를 조성할 것입니다.</span>
          </p>
        </div>
        <div id="mobile-view-box" class="col-md-6 text-center col-box">
            <p>
                <span class="main-text-type01">
                    <span class="main-font-up">A</span>pplying<br />
                    <span class="main-font-up">BL</span>ockchain to<br />
                    <span class="main-font-up">E</span>xtend the finance
                </span>
                <span class="main-text-type02"><span>ABLE PROJECT</span>는 세계최대<br />"블록체인 전문은행"을 설립 합니다.</span>
                <p class="sub-text">
                    ABLE PROJECT는 암호화폐기반 예금/대출상품의 설계(Smart Contract)를 통해
                    주체적으로 <span>암호화폐시장</span>의 <span>유동성</span>을 <span>제고</span>할 것입니다.
                    <br><br>
                    대기자금은 Mining, Trading, IB(NPL, Derivatives 등)에 <span class="color-text">분산운용</span>하여
                    ABLE PROJECT의 <span>수익</span>을 <span>극대화</span> 시켜줍니다.
                    <br><br>
                    ABLE PROJECT는 암호화폐의 금융화 안전한 관리 이외 VR, AI, 바이오 등
                    <span>4차 산업혁명시대를 이끌어갈 새로운 인프라를 조성할 것입니다.</span>
                    <br><br>
                    ABLE Coin은 ERC-20토큰으로 Pre-Sales 및 ICO를 통해 발행됩니다
                </p>
            </p>
        </div>
        <div class="col-md-6" id="about-img-block">
          <img src="<?php echo $dm?>/images/image1-n.png" class="re-image01 margin-center" />
        </div>
      </div>
    </div>
  </section>

  <!-- video preview -->
  <section id="video" class="section">
    <div class="container text-center">
      <h2 class="white">PREVIEW</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div class="col-md-6 video-box">
          <iframe width="100%" style="height:340px" src="https://www.youtube.com/embed/z_CwMI6fxtc" frameborder="0" allowfullscreen class="margin-center"></iframe>
        </div>
        <div class="col-md-6 video-text-box">
          <h3 class="white main-text">ABLE PROJECT</h3>
          <div class="sub-text margin-40">
              <div>
                  <p class="text-left"><span>ABLE Project</span>는 최초의 블록체인 전문은행으로 VR, AI 로봇 등 4차 산업혁명 기업들과 연계를 진행하고 있습니다.</p>
                  <p class="text-left">ABLE Project를 통해 이용자는 암호화폐의 <span>예금, 대출, 자산운용</span>이 가능하며, ABLE Project는 수익을 통해 ABLE의 가치를 높일 예정입니다.</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- needs -->
  <section id="needs" class="section">
    <div class="container text-center">
      <h2>NEEDS</h2>
      <div class="divider"></div>
      <p class="margin-90">
        <span class="main-text">현재 암호화폐시장이 안정될수록 거래소보다 "뱅크"가 필요해 질 것입니다</span><br><br>
          <p>태동단계의 암호화폐 시장의 변동성은 시장이 성숙해질수록 줄어들게 됩니다.</p>
          <p>ABLE은 현재의 불안한 변동성에 대비하고, 미래의 성숙된 시장에서 안정적인 수익을 얻을 수 있는 뱅킹솔루션을 제안합니다.</p>
          <p>ABLE은 블록체인 뱅크 플랫폼으로써 강화된 보안, 편리한 환전, 거치형 예금 상품 등 접근성이 뛰어난 뱅크 플랫폼을 지향하고 있습니다</p>
          <p>에스토니아 법인을 시작으로 싱가포르 등 아시아 전 국가에 지점을 확대하여 아시아 최초이자 최대 블록체인뱅크 서비스를 제공할것입니다.</p>
          <br>
      </p>
    </div>
  </section>

  <!-- structure 구조 -->
  <section id="structure" class="section">
    <div class="container text-center">
      <h2>BUSINESS STRUCTURE</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div class="col-md-6 business-box-img">
          <img src="<?php echo $dm?>/images/image2-n.png" class="re-image01 margin-center" />
        </div>
        <div id="desktop-view-box" class="col-md-6 text-center col-box">
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
              ICO를 참가한 기부자는 AIR-DROP, VIP 카드발급, PAYBACK 등<br>
              다양한 혜택을 받을 수 있습니다.
            </p>
          </div>
        </div>
        <div id="mobile-view-box" class="col-md-6 text-center col-box">
          <h3 class="main-text">ABLE BANK</h3>
          <div class="margin-40">
              <p>
                  ABLE Project는 블록체인 전문은행으로 고객들의 암호화폐 자산을 <span>보험</span> 및 <span>법률 자문</span>을 통해 안전하게 보호합니다.
              </p>
              <p>
                  블록체인을 기반으로 <span>스마트 계약</span>을 활용하여 <span>은행서비스</span>와 <span>다양한 자산운용 상품</span>을 제공합니다.
              </p>
              <p>
                  ABLE Project 기부자는 은행 및 자산운용에서 <span>발생한 수익</span>을 지분에 비례하여 <span>분배</span> 받습니다.
              </p>
              <p>
                  ICO를 참가한 기부자는 AIR-DROP, VIP 카드발급, PAYBACK 등 다양한 혜택을 받을 수 있습니다.
              </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- 에이블 SERVICE -->
  <section id="service" class="section">
    <div class="container">
      <div class="features-text text-center">
        <h2>SERVICE</h2>
        <div class="divider"></div>
      </div>
      <div class="row margin-90">
        <div class="col-md-12 col-sm-12 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#f04848">account_balance</i>
          <div class="features-content">
            <h3>BANKING SERVICES</h3>
            <p>
              현시대에서 블록체인은 미래를 바꿀 기술 중 하나로 꼽히고 있습니다. ABLE project는 암호화폐의 예금 및 대출, 자산관리 서비스를 제공하는 블록체인 전문 은행입니다. 블록체인 시스템의 투명성, 불변성, 보안 및 신뢰성을 기반으로 은행순수익의 40%를 프로젝트 참여자들에게 공유합니다. ABLE Project는 블록체인 스마트 컨트랙트를 기반으로 암호화폐 예금 및 대출 서비스를 실현하며, 암호화폐 자산관리 서비스로  벤처투자, 채권, 마이닝, 알트코인 트레이딩, NPL부동산, ICO 등의 다양한 금융상품 서비스를 제공합니다.
            </p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 text-center type-box margin-60">
          <i class="material-icons" style="font-size:60px;color:#f04848">trending_up</i>
          <div class="features-content">
            <h3>ASSET MANAGEMENT</h3>
            <p>
              ABLE은 18년 1분기에 파트너사인 소셜 거래소 비트뱅크에 상장될 예정입니다. ICO 이후 상장까지 시간을 단축시켜 ABLE 자산관리의 어려움을 최소화 합니다.
              Pre-Sale과 ICO로 발행된 토큰은 비트뱅크 거래소의 지갑에 전송되기 때문에 ICO이후 거래소 지갑으로 전송해야 하는 번거로움과 개인 월넷의 해킹위험을 방지할 수 있습니다.
            </p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 text-center type-box margin-60">
          <i class="material-icons" style="font-size:60px;color:#f04848">lock</i>
          <div class="features-content">
            <h3>SECURITY AND STABILITY</h3>
            <p>
              모든 서비스는 아마존클라우드(AWS)에 올려 보관됩니다. AWS 클라우드가 제공하는 각종 보안 서비스를 활용합니다. 암호화폐 보관은 콜드월렛에서 코인환전은 핫월렛에서 진행하는 분리저장시스템을 활용합니다. AWS 클라우드의 VPC(Virtual Private Cloud)에 핫월렛의 프라이빗키(Private key, 비트코인 거래를 위해 개인임을 식별할 수 있는 암호화된 가상 열쇠)의 일부만 올려두는 보안 정책을 사용합니다.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="platform" class="section">
    <div class="container">
      <div>
        <h2>PLATFORM ARCHITECTURE</h2>
        <div class="divider"></div>
        <h3>이더리움 스마트컨트랙트에 기반하여 금융상품과 거래내역을 메인넷에 기록하며 고객의 자산운용과 투명성을 극대화 합니다.</h3>
        <div class="row type-box-wrap">
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
            <div class="col-lg-3 col-md-3 col-xs-3 text-left td-01"></div>
            <div class="col-lg-3 col-md-3 col-xs-3 text-right td-02">1<span class="font-down">ST</span></div>
            <div class="col-lg-3 col-md-3 col-xs-3 text-right td-03">2<span class="font-down">ST</span></div>
            <div class="col-lg-3 col-md-3 col-xs-3 text-right td-04">3<span class="font-down">ST</span></div>
        </div>
        <div class="row margin-20">
            <div class="col-lg-3 col-md-3 col-xs-3 text-left td-01">PRESALE<br><span class="font-down">(토큰뱅크)</span></div>
            <div class="col-lg-3 col-md-3 col-xs-3 text-right td-02">2,000 ETH<br><span class="color-navi">1ETH = 100,000 ABL</span></div>
            <div class="col-lg-3 col-md-3 col-xs-3 text-right td-03">3,000 ETH<br><span class="color-navi">1ETH =  90,000 ABL</span></div>
            <div class="col-lg-3 col-md-3 col-xs-3 text-right td-03">4,000 ETH<br><span class="color-navi">1ETH =  80,000 ABL</span></div>
        </div>
      </div>
    </div>
    <div class="container bottom-box">
      <div class="row">
        <div class="col-md-6 limit-per-zone">
          <h3>USE OF PROCEEDS</h3>
          <div class="row limit-box">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div style="color:#fff;background-color:#1f2537;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#30384f;width:80%;height:20px;line-height:22px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#5b74b9;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#394f74;width:80%;height:60px;line-height:60px;text-align:center">15%</div>
              <div style="color:#fff;background-color:#1dc5c8;width:80%;height:240px;line-height:240px;text-align:center">60%</div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 color-define-zone">
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
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div style="color:#fff;background-color:#6f7d8f;width:80%;height:240px;line-height:240px;text-align:center">60%</div>
              <div style="color:#fff;background-color:#5b74b9;width:80%;height:40px;line-height:45px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#394f74;width:80%;height:40px;line-height:45px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#30384f;width:80%;height:20px;line-height:22px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#636b81;width:80%;height:20px;line-height:22px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#1f2537;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 color-define-zone">
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
            <h3>2018. 2Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">Pre-Sale (토큰뱅크 예정)</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2018. 3,4Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">국내,외 거래소 상장</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2019. 1Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">블록체인 전문은행 오픈 (예금)</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2019. 2Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">자산운용 금융상품 서비스 시작</span>
            </p>
          </div>

          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2019. 3Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">ABLE BANK 수익활용</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2019. 4Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">PoS 기반 ABLE 메인네트워크 개발</span>
            </p>
          </div>
          <div class="col-sm-3 col-lg-3 roadmapBox">
            <h3>2020</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">메인네트워크 오픈 및 PoS 보상</span>
            </p>
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

         <div class="col-lg-12 margin-90">
            <div id="1_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                ABLE Project란 무엇인가요?
              </div>
              <div id="1_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="1_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12" style="margin-top:20px;">
                ABLE PROJECT는 블록체인 상에서 암호화폐의 예금 및 대출, 자산운용 서비스를 제공하는 아시아 최초의 뱅크 솔루션입니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>
            <div id="2_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                참가자에 대한 국적제한이 있는지요?
              </div>
              <div id="2_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="2_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12" style="margin-top:20px;">
                참가자에 대한 제한은 없습니다. 다만, 국가 규제에 따른 ICO 금지국가(미국, 중국)에서는 참여할 수 없습니다. 
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

            <div id="3_accordion_btn" class="list-group faq_accordion_item">
              <div class="list-group-item faq_accordion_btn">
                Pre-Sale 참여시 ICO와 비교해 어떤 혜택이 있나요?
              </div>
              <div id="3_accordion_child" class="faq_accordion_child"></div>
            </div>
            <div id="3_accordion_block" class="gone faq_accordion_block">
              <div class="col-lg-12" style="margin-top:20px;">
                1차 Pre-Sale은 25%, 2차 Pre-Sale은 11%의 추가 코인을 배분 받을수 있습니다.
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
              <div class="col-lg-12" style="margin-top:20px;">
                Pre-Sale 3회, ICO 1회 총 4회의 구매 기회가 있습니다.
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
              <div class="col-lg-12" style="margin-top:20px;">
                ABLE PROJECT 홈페이지(https://www.able-project.io)를 통해서 참여할 수 있습니다.
              </div>
              <div class="clearfix" style="margin-bottom:30px;"></div>
            </div>

           <!--<div id="6_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               ABLE PROJECT 참여는 언제부터 시작하나요?
             </div>
             <div id="6_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="6_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               12월 15일 20시 홈페이지를 통해 첫 번째 Pre-sale에 참여할 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>-->

           <div id="7_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               Pre-Sale과 ICO 진행 시 배포되는 토큰 수는 얼마인가요?
             </div>
             <div id="7_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="7_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               Pre-Sale로 약 790,000,000 ABL, ICO에서 약 710,000,000 ABL 코인이 발행 예정입니다. 유통 코인 목표 개수는 1,500,000,000 ABL 입니다.
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
             <div class="col-lg-12" style="margin-top:20px;">
               회차 별로 배포되지 않은 코인은 다음 회차로 넘어가며 최종까지 배포되지 않은 코인은 소각 예정입니다.
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
             <div class="col-lg-12" style="margin-top:20px;">
               이더리움(ETH)으로만 참여 가능합니다.
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
             <div class="col-lg-12" style="margin-top:20px;">
               2019년에 PoS 기반 ABLE 전용 메인네트워크를 개발할 예정이며, 2020년에 오픈 합니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <!--<div id="12_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               홈페이지에서 본인인증을 할수 없게 되면 ABLE PROJECT에 참여하기 어려운가요?
             </div>
             <div id="12_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="12_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               본인인증 없어도 참여 가능합니다. 다만, 향후 본인인증을 할 수 없을 시 불이익이 있을 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>-->

           <!--<div id="13_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               본인인증 방식은 어떻게 되나요?
             </div>
             <div id="13_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="13_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               E-mail이나 휴대폰 인증을 통해 본인인증을 할 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>-->

           <div id="14_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               1인당 참여 제한금액이 있나요?
             </div>
             <div id="14_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="14_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               참여금액은 제한이 없습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>
           <div id="15_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
                 거래소 지갑을 통해 참여 가능한가요?
             </div>
             <div id="15_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="15_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
                 불가능합니다. 거래소 지갑에서 참여하시면 에이블 토큰을 지급해 드릴 수 없습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>
           <div id="16_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
                 참여할 수 있는 지갑이 정해져 있는가요?
             </div>
             <div id="16_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="16_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
                 마이이더월렛(MyEtherWallet) 만 가능하며, 회원가입시 등록한 지갑주소로만 참여 가능합니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="17_accordion_btn" class="list-group faq_accordion_item">
               <div class="list-group-item faq_accordion_btn">
                   시중은행들이 거대한 자본금으로 진입한다면 어떻게 대응하나요?
               </div>
               <div id="17_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="17_accordion_block" class="gone faq_accordion_block">
               <div class="col-lg-12" style="margin-top:20px;">
                   시중은행들은 금융권 규제 때문에 신규 진입이 굉장히 어렵습니다. 오히려 ABLE에 투자를 하는 형태가 될것입니다.
               </div>
               <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="18_accordion_btn" class="list-group faq_accordion_item">
               <div class="list-group-item faq_accordion_btn">
                   ABLE의 토큰 용도는 어떻게 되나요?
               </div>
               <div id="18_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="18_accordion_block" class="gone faq_accordion_block">
               <div class="col-lg-12" style="margin-top:20px;">
                   ABLE뱅크 내에서 스마트 컨트렉트를 기반으로 자산운용과 서비스를 결제하는 시스템 구성요소로 이용되며, 그 외에 AI, VR 등 4차산업과 관련된 곳의 결제수단으로도 활용 예정입니다.
               </div>
               <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>
         </div>
     </div>
   </section>


  <!-- partner -->
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
  <script src="<?php echo $dm?>/js/main.js?d=20171020113443243"></script>
  <script src="<?php echo $dm?>/js/scrollSpy.js" type="text/javascript"></script>
  <script src="<?php echo $dm?>/js/scrollto.js" type="text/javascript"></script>
  <script src="<?php echo $dm?>/js/anim_scroll.js" type="text/javascript"></script>
</body>
</html>
