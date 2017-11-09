<?php
  include(dirname(__FILE__).'/library/common.php'); //domain check
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/flexslider.css" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/main.css?d=201709251312122232323" />
    <link rel="stylesheet" href="<?php echo $dm?>/css/responsive.css?d=2017092513232323" />
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
  <script src="<?php echo $dm?>/js/canvas-init.js"></script>
  <!-- Custom styles for this template -->
</head>
<body>
<script type="text/javascript">
    var mouseX = 0, mouseY = 0,
        windowHalfX = window.innerWidth / 2,
        //windowHalfY = 100000,
        windowHalfY = window.innerHeight / 2,
        //SEPARATION = 100, AMOUNTX = 10000, AMOUNTY = 10000,
        camera, scene, renderer;
    init();
    animate();
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
            <li><a href="https://s3.ap-northeast-2.amazonaws.com/able-project/ABLE+Project+White+Paper.pdf" class="beta-styles" style="color: black" target="_blank">WHITEPAPER</a></li>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <div style="clear: both;">
            <img src="<?php echo $dm?>/images/logo_file.png" class="main-block-logo" alt="able bank">
          </div>
          <h1 style="margin-top: 30px;">The Global Block Chain Dedicated Bank</h1>
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
              <a href="#" onclick="alert('11월15일 20시 이후 공개채팅방을 개설합니다.');return false;" id="kakaoTalk_v1"><span>Join KaKao Talk</span></a>
              <a href="#" onclick="alert('11월15일 20시 이후\n로그인과 회원가입이 참여가 가능합니다.');return false;" id="signIn"><span>Sign In</span></a>
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
        <div id="desktop-view-box" class="col-md-6 text-center col-box">
          <p class="align-middle">
            <span class="main-text-type01">"<span class="main-font-up">A</span>pplying <span class="main-font-up">BL</span>ockchain to <span class="main-font-up">E</span>xtend the finace"</span><br><br>
            <span class="main-text-type02"><span>ABLE PROJECT</span>는 세계최대 "블록체인 전문은행"을 설립 합니다.</span><br />
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
            ABLE Coin은 ERC-20토큰으로 Pre-Sales 및 ICO를 통해 발행됩니다
          </p>
        </div>
        <div id="mobile-view-box" class="col-md-6 text-center col-box">
            <p>
                <span class="main-text-type01">
                    <span class="main-font-up">A</span>pplying<br />
                    <span class="main-font-up">BL</span>ockchain to<br />
                    <span class="main-font-up">E</span>xtend the finace
                </span>
                <span class="main-text-type02"><span>ABLE PROJECT</span>는 세계최대<br />"블록체인 전문은행"을 설립 합니다.</span>
                <p class="sub-text">
                    ABLE PROJECT는 암호화폐기반 예금/대출상품의 설계(Smart Contract)를 통해
                    주체적으로 <span>암호화폐시장</span>의 <span>유동성</span>을 <span>제고</span>할 것입니다.
                    <br><br>
                    대기자금은 Minning, Trading, IB(NPL, Derivatives 등)에 <span class="color-text">분산운용</span>하여
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
    <div class="container-fluid text-center">
      <h2 class="white">Preview</h2>
      <div class="divider"></div>
      <div class="row margin-90">
        <div class="col-md-6 video-box">
          <iframe width="100%" src="https://www.youtube.com/embed/LEGOpjdu638" frameborder="0" allowfullscreen class="margin-center"></iframe>
        </div>
        <div class="col-md-6 video-text-box">
          <h3 class="white main-text">ABLE PROJECT</h3>
          <div class="sub-text margin-40">
              <div>
                  <p class="text-left"><span>ABLE Project</span>는 최초의 블록체인 전문은행으로 VR, AI 로봇 등 4차 산업혁명 기업들과 연계하고 있습니다. 그리고 협력 거래소 <span>BIT BANK</span>를 통해 ABLE 코인의 빠른 거래소 상장을 보장합니다.</p>
                  <p class="text-left">ABLE Project를 통해 이용자는 암호화폐의 <span>예금, 대출, 자산운용</span>이 가능하며, 알트코인이 무료환전 혜택을 누릴 수 있습니다. ABLE Project는 기부자에게 매년 은행수익의 40%를 배분합니다.</p>
              </div>
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
              ABLE Project 기부자는 은행 및 자산운용에서 <span>발생한 수익</span>을<br>
              지분에 비례하여 <span>분배</span> 받습니다.
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
    <div class="container-fluid">
      <div class="features-text text-center">
        <h2>SERVICE</h2>
        <div class="divider"></div>
      </div>
      <div class="row margin-90">
        <div class="col-md-4 col-sm-4 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#0028ac">account_balance</i>
          <div class="features-content">
            <h3>Banking services</h3>
            <p>
              현시대에서 블록체인은 미래를 바꿀 기술 중 하나로 꼽히고 있습니다. ABLE project는 암호화폐의 예금 및 대출, 자산관리 서비스를 제공하는 블록체인 전문 은행입니다. 블록체인 시스템의 투명성, 불변성, 보안 및 신뢰성을 기반으로 은행순수익의 40%를 프로젝트 참여자들에게 공유합니다. ABLE Project는 블록체인 스마트 컨트랙트를 기반으로 암호화폐 예금 및 대출 서비스를 실현하며, 암호화폐 자산관리 서비스로  벤처투자, 채권, 마이닝, 알트코인 트레이딩, NPL부동산, ICO 등의 다양한 금융상품 서비스를 제공합니다.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#0028ac">trending_up</i>
          <div class="features-content">
            <h3>Asset Management</h3>
            <p>
              ABLE은 18년 1분기에 파트너사인 소셜 거래소 비트뱅크에 상장될 예정입니다. ICO 이후 상장까지 시간을 단축시켜 ABLE 자산관리의 어려움을 최소화 합니다.
              Pre-Sale과 ICO로 발행된 토큰은 비트뱅크 거래소의 지갑에 전송되기 때문에 ICO이후 거래소 지갑으로 전송해야 하는 번거로움과 개인 월넷의 해킹위험을 방지할 수 있습니다.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 text-center type-box">
          <i class="material-icons" style="font-size:60px;color:#0028ac">lock</i>
          <div class="features-content">
            <h3>Security And Stability</h3>
            <p>
              모든 서비스는 아마존클라우드(AWS)에 올려 보관됩니다. AWS 클라우드가 제공하는 각종 보안 서비스를 활용합니다. 암호화폐 보관은 콜드월렛에서 코인환전은 핫월렛에서 진행하는 분리저장시스템을 활용합니다. AWS 클라우드의 VPC(Virtual Private Cloud)에 핫월렛의 프라이빗키(Private key, 비트코인 거래를 위해 개인임을 식별할 수 있는 암호화된 가상 열쇠)의 일부만 올려두는 보안 정책을 사용합니다.
            </p>
          </div>
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
          <div class="col-lg-2 col-md-2 col-xs-2 text-left td-01"></div>
          <div class="col-lg-5 col-md-5 col-xs-5 text-right td-02">1<span class="font-down">ST</span></div>
          <div class="col-lg-5 col-md-5 col-xs-5 text-right td-03">2<span class="font-down">ED</span></div>
        </div>
        <div class="row margin-20">
          <div class="col-lg-2 col-md-2 col-xs-2 text-left td-01">PRESALE<br><span class="font-down">(17.11.15)</span></div>
            <div class="col-lg-5 col-md-5 col-xs-5 text-right td-02">6,000 ETH<br><span class="color-navi">1ETH = 4,940 ABL</span></div>
            <div class="col-lg-5 col-md-5 col-xs-5 text-right td-03">24,000 ETH<br><span class="color-navi">1ETH = 4,750 ABL</span></div>
        </div>
        <div class="row margin-20">
          <div class="col-lg-2 col-md-2 col-xs-2 text-left td-01">ICO</div>
            <div class="col-lg-5 col-md-5 col-xs-5 text-right td-02">30,000 ETH<br><span class="color-navi">1ETH = 3,990 ABL</span></div>
            <div class="col-lg-5 col-md-5 col-xs-5 text-right td-03">60,000 ETH<br><span class="color-navi">1ETH = 3,800 ABL</span></div>
        </div>
        <!--<div class="row margin-20">
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
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div style="color:#fff;background-color:#1f2537;width:80%;height:40px;line-height:40px;text-align:center">10%</div>
              <div style="color:#fff;background-color:#30384f;width:80%;height:20px;line-height:25px;text-align:center">5%</div>
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
              <div style="color:#fff;background-color:#30384f;width:80%;height:20px;line-height:25px;text-align:center">5%</div>
              <div style="color:#fff;background-color:#636b81;width:80%;height:20px;line-height:25px;text-align:center">5%</div>
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
            <h3>2017. 4Q</h3>
            <p class="text-left">
              <span class="text-cicle"></span><span class="text-left-padding">대기자금 비트코인 & 부동산<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;중심 투자</span>
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
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 30px;">
          <a href="http://blog.naver.com/kblockchain/221115119554" target="_blank">
            <img src="<?php echo $dm?>/images/socials/blog.jpg" alt="Blog"  />
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 30px;">
          <a href="https://www.facebook.com/Kblockchains/" target="_blank">
            <img src="<?php echo $dm?>/images/socials/fb.png" alt="Facebook"  />
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 30px;">
          <a href="https://twitter.com/kblockchains" target="_blank">
            <img src="<?php echo $dm?>/images/socials/twitter.png" alt="Twitter"  />
          </a>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 30px;">
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
                  <p class="jobBox">국세 공무원 출신으로 공군장교를 거쳐 삼성 재무팀에서 근무했다. NPL부동산 및 자산운용 전문가로 커뮤니티(사자후의 투자연구소)를 운영하고 있다. 블록체인 관련 다양한 경험을 보유하고 있으며 K-Blockchains의 CEO이다.</p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox cto"></div>
                  <div class="nameBox">Y.D YOON</div>
                  <div class="catBox">CTO</div>
                  <p class="jobBox">유니스트에서 컴퓨터공학 및 전자공학을 전공하고, 카이스트에서 Internet of Things (IoT) 연구를 통해 석사학위를 받았다. 이후 IoT 오픈 소스 플랫폼인 Open Language for Internet of Things (OLIOT) 개발에 참여하고 관리 중이다.
                      현재 카이스트에서 박사과정 중으로 Blockchain을 적용한 IoT 플랫폼 연구를 수행 중이다.</p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox cfo"></div>
                  <div class="nameBox">Sukyu Cheah</div>
                  <div class="catBox">CFO</div>
                  <p class="jobBox">University of California, San Diego와 고려대학교 경제학과를 졸업하였다. 삼성 재무팀에서 감사, 결산등의 업무를 맡아 프로젝트를 진행한 경력이 있으며 회사 내 재무, 회계업무 등을 총괄하고 있다.</p>
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
                      삼성전자에서 사용자 경험에 대한 개발연구 및 디자인을 하며 다양한 서비스를 만들어낸 경험이 있다. 가상화폐 트레이딩 및 마이닝을 하며 블록체인 연구소를 설립하고 소셜 트레이딩 가상화폐 거래소 비트뱅크를 창업하였다. 현재는 블록체인 관련 특허 및 강의 진행중에 있다.
                  </p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox bit-cso"></div>
                  <div class="nameBox">HANNA GANG</div>
                  <div class="catBox">CSO</div>
                  <p class="jobBox">
                      소셜 트레이딩 서비스 ‘비트뱅크’에서 고객을 관찰해 가치를 발굴하고, 이를 서비스에 융합하거나 미디어를 통해 고객에게 전달하는 일을 하고 있다. IT 컨설팅 회사에 근무했으며, 은행, 보험, 캐피탈 등 다양한 금융 분야의 고객 경험을 분석하고, 전략 및 서비스 설계로 반영하는 일을 했다. 경제연구원에서 객원 칼럼니스트로 활동하고 있다.
                  </p>
                </div>
                <div class="col-md-3">
                  <div class="imageBox bit-cto"></div>
                  <div class="nameBox">PHILGOO KANG</div>
                  <div class="catBox">CTO</div>
                  <p class="jobBox">
                      한양대학교에서 컴퓨터공학과를 전공했다. SK계열사에서 CTO로 신규 결제 플랫폼 총괄하고, 인테리어 소셜네트워크 서비스까지 구축한 경험이 있다. 비트뱅크 CTO로 기술적 부분에 대한 효과적 활용을 위해 연구하고 있다.
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
                    개발팀 총 책임자로 인프라 엔지니어, 업무 인프라 아키텍처 설계 및 트러블 슈팅에 관한 10년 이상의 다양한 경험을 갖고 있다. ABLE PROJECT의 서버, 운영체제, 네트워크 스토리지 등 총괄하여 관리하고 있다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">J.A Beak</div>
                  <div class="catBox">Infra engineer</div>
                  <p class="jobBox">
                    Database와 WAS 전문가로서 8년동안 근무하였으며 차세대 ERP 및 각종 프로젝트에 참여하였다. ABLE PROJECT의 인프라 아키텍쳐 설계 및 트러블 슈팅, 튜닝을 담당하고 있다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">J.W LEE</div>
                  <div class="catBox">Front Engineer</div>
                  <p class="jobBox">
                      음원스트리밍 서비스 APPLICATION 프로젝트를 진행 및 완료.
                      이후 여러 스타트업을 통해 기획/개발/투자에 참여하였다.
                      주로 소셜커머스, 주차관련 서비스를 개발 하였으며, O2O 사업에 관심이 많다.
                      현재 REACT+REDUX SAGA를 활용한 APPLICATION 개발에
                      관심을 갖고 몰두 중이다.
                      심플하고 가독성이 높은 UI를 지향하고 스타일.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                    <div class="nameBox">D.S NGung</div>
                    <div class="catBox">Server Engineer</div>
                    <p class="jobBox">
                        웹개발자로 13년간 소셜커머스/음악플랫폼/ERP 등의 서비스 및 관리 경험을 통하여 현재는 ABLE PROJECT의 Backend Architecture를 설계하고 Application의 기능적인 부분을 전담하고 있다.
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">M.J Lee</div>
                  <div class="catBox">Designer</div>
                  <p class="jobBox">
                      웹, 모바일, UI/UX 등 다양한 분야에 대한 디자인 경험이 있다. 대기업 팀장 등 여러 그룹에서 프로젝트 활동을 하였으며 K-blockchains의 모든 부분에 대한 디자인을 담당하고 있다.
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
                    금융분야 전문가로 은행시스템 및 상품개발자로 시중은행에서 근무한 경험을 가지고 있다. 이를 바탕으로 다양한 상품투자가 가능한 블록체인 전문은행을 구현하고 있다.
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">J.S Kim</div>
                  <div class="catBox">Finance Specialis</div>
                  <p class="jobBox">
                    관세사로 경영학을 전공하였고 국제무역 및 외환거래에 대한 프로젝트 경험이 있다. 회사의 수익구조에 관한 합리적 의사결정을 위해 다양한 방법으로 기획하고 분석한다
                  </p>
                </div>
                <div class="col-md-3 dev-tum">
                    <div class="nameBox">D.P Lim</div>
                    <div class="catBox">Finance Specialist</div>
                    <p class="jobBox">
                        주로 FMI그룹과 하베스트에서 대체 투자와 공모주를 진행하였으며 그 외 자산관리에 대한 경험이 있다. 이를 활용하여 블록체인과 결합한 상품 개발에 주력하고 있다
                    </p>
                </div>
                <div class="col-md-3 dev-tum">
                  <div class="nameBox">Erin Woo</div>
                  <div class="catBox">Marketer</div>
                  <p class="jobBox">
                    마케팅 총 책임자로 B2B 및 B2C에 대한 마케팅 전문가이다. 다양한 분야에서 10년 이상의마케팅 활동 경험이 있으며 ABLE PROJECT의 소셜미디어, 프로젝트 관리, 기획 및 집행 등을 총괄하고 있다.
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
              <div class="col-lg-12" style="margin-top:20px;">
                ABLE PROJECT는 블록체인 상에서 암호화폐의 예금 및 대출, 자산관리 서비스를 제공하는 아시아 최초의 뱅크 솔루션입니다.
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
                1차 Pre-Sale은 30%, 2차 Pre-Sale은 25%의 추가 코인을 배분 받을수 있습니다.
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
                Pre-Sale 2회, ICO 2회 총 4회의 구매 기회가 있습니다.
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

           <div id="6_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               ABLE PROJECT 참여는 언제부터 시작하나요?
             </div>
             <div id="6_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="6_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               11월 15일 20시 홈페이지를 통해 첫 번째 Pre-sale에 참여할 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="7_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               Pre-Sale과 ICO 진행 시 배포되는 토큰 수는 얼마인가요?
             </div>
             <div id="7_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="7_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               Pre-Sale로 약 1억 4천만 개, ICO에서 약 2억5천만 개의 코인이 발행되며, 하드캡은 1억개입니다.
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

           <div id="10_accordion_btn" class="list-group faq_accordion_item">
             <div class="list-group-item faq_accordion_btn">
               거래소는 언제부터 사용가능한가요?
             </div>
             <div id="10_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="10_accordion_block" class="gone faq_accordion_block">
             <div class="col-lg-12" style="margin-top:20px;">
               2018년 1월 비트뱅크(BITBANK) 상장에 상장되며, 2018년 상반기에는 비트렉스 및 주요 거래소에 상장예정입니다.
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
               2019년에 PoS 기반 ABLE 전용 메인네트워크를 개발할 예정입니다.
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
             <div class="col-lg-12" style="margin-top:20px;">
               본인인증 없어도 참여 가능합니다. 다만, 향후 본인인증을 할 수 없을 시 불이익이 있을 수 있습니다.
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
             <div class="col-lg-12" style="margin-top:20px;">
               E-mail이나 휴대폰 인증을 통해 본인인증을 할 수 있습니다.
             </div>
             <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

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
                 마이이더월렛(MyEtherWallet)만 가능하며, 회원가입시 등록한 지갑주소로만 참여 가능합니다.
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
                   시중은행들은 금융권 규제 때문에 신규 진입이 굉장히 어렵습니다. 오히려 저희에게 투자를 하는 형태가 될것입니다.
               </div>
               <div class="clearfix" style="margin-bottom:30px;"></div>
           </div>

           <div id="18_accordion_btn" class="list-group faq_accordion_item">
               <div class="list-group-item faq_accordion_btn">
                   ABLE의 사용처는 어디인가요?
               </div>
               <div id="18_accordion_child" class="faq_accordion_child"></div>
           </div>
           <div id="18_accordion_block" class="gone faq_accordion_block">
               <div class="col-lg-12" style="margin-top:20px;">
                   AI, VR 등 4차산업과 관련된 곳의 결제수단과 ABLE뱅크 내에서 스마트컨트랙트 기능을 하는 도구로 쓰입니다.
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
          <a href="javascript:"><img class="box-1" src="<?php echo $dm?>/images/partner/pa-011.png" /></a>
          <!--<a href="#" target="_blank"><img class="box-2" src="<?php echo $dm?>/images/partner/pa-08.png" /></a>-->
          <a href="javascript:"><img class="box-3" src="<?php echo $dm?>/images/partner/pa-06.png" /></a>
          <a href="javascript:"><img class="box-4" src="<?php echo $dm?>/images/partner/pa-05.jpg" /></a>
          <a href="javascript:"><img class="box-5" src="<?php echo $dm?>/images/partner/pa-07.gif" /></a>
          <a href="javascript:"><img class="box-6" src="<?php echo $dm?>/images/partner/pa-03.gif" /></a>
          <a href="javascript:"><img class="box-7" src="<?php echo $dm?>/images/partner/pa-04.jpg" /></a>
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
  <script src="<?php echo $dm?>/js/main.js?d=201710201112121"></script>
  <script src="<?php echo $dm?>/js/scrollSpy.js" type="text/javascript"></script>
  <script src="<?php echo $dm?>/js/scrollto.js" type="text/javascript"></script>
  <script src="<?php echo $dm?>/js/anim_scroll.js" type="text/javascript"></script>
  <script>
      getTimeIcoDate();

      //메인 section의 크기를 감지하여 캔버스의 크기를 똑같이 맞춰서 늘려준다.
      var mainEl = document.querySelector("#mainSection");
      var canvasEl = document.querySelector("canvas");

      //canvas height 수정
      canvasEl.style.height = mainEl.scrollHeight+"px";

      //canvas width 수정
      canvasEl.style.width = mainEl.scrollWidth+"px";
  </script>
</body>
</html>
