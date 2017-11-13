$(document).ready(function() {
	var headerClass = function() {
		var scroll = $(window).scrollTop();
		if (scroll >= 50) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}
	}
	$(window).on('scroll', headerClass);
  headerClass();

	$('.work').waypoint(function() {
		$('.work').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.download').waypoint(function() {
		$('.download .btn').addClass('animated tada');
	}, {
		offset: '75%'
	});

	$('.flexslider').flexslider({
		animation: "fade",
		directionNav: false,
	});

	var sections = $('section')
		nav = $('nav[role="navigation"]');

	$(window).on('scroll', function () {
	  	var cur_pos = $(this).scrollTop();
	  	sections.each(function() {
	    	var top = $(this).offset().top - 76
	        	bottom = top + $(this).outerHeight();
	    	if (cur_pos >= top && cur_pos <= bottom) {
	      		nav.find('a').removeClass('active');
	      		nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    	}
	  	});
	});
	if ($(window).innerWidth() > 767) {
  		$('#video').append('<source src="images/vid.mp4" type="video/mp4"/>');
	}
	nav.find('a').on('click', function () {
	  	var $el = $(this)
	    	id = $el.attr('href');
		$('html, body').animate({
			scrollTop: $(id).offset().top - 75
		}, 500);
	  return false;
	});

	$('.nav-toggle').on('click', function() {
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		return false;
	});
	nav.find('a').on('click', function() {
		$('.nav-toggle').toggleClass('close-nav');
		nav.toggleClass('open');
	});
});

var WebsiteHelper = {
	activate_accordion: function(name, group) {
		var $children = $('.' + group + '_child');
		$children.text('+');

    $('.'+group+'_block').css("display", "none");
		$('#'+name+'_child').text('-');
    $('#'+name+'_block').css("display", "block");
  },
  init: function() {
		WebsiteHelper.activate_accordion('1_accordion', 'faq_accordion');
		$('.faq_accordion_item').each(
			function(){
				var $btn = $(this);
				var name = $btn.attr('id').replace('_btn', '');
				$btn.click(
					function(){
                        WebsiteHelper.activate_accordion(name, 'faq_accordion');
					}
					//() => WebsiteHelper.activate_accordion(name, 'faq_accordion')
				)
			}
		);
  }
}

$(WebsiteHelper.init);


/////////////////////
////time D-day
///////////////////
var icoDay = document.getElementById("clock-day");
var icoHour = document.getElementById("clock-hour");
var icoMin = document.getElementById("clock-min");
var icoSec = document.getElementById("clock-sec");

function getTimeIcoDate(){
    var dat1 = new Date(); //현재날짜
	var dat2 = new Date(2017,10,15,20,0,0);

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

/////////////////////////////
//ie type check
/////////////////////////////
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

/////////////////////////////
//canvas fix position
/////////////////////////////
function canvasFix(){
	//메인 section의 크기를 감지하여 캔버스의 크기를 똑같이 맞춰서 늘려준다.
    var mainEl = document.querySelector("#mainSection");
    var canvasEl = document.querySelector("canvas");

	//canvas height 수정
    canvasEl.style.height = mainEl.scrollHeight+"px";

	//canvas width 수정
    canvasEl.style.width = mainEl.scrollWidth+"px";
}

///////////////////////////
//get Use able Eth
///////////////////////////
function getSendEth(){
    urls = "/gateway/current_eth.php";

    $.ajax({
        url: urls,
        method: 'POST',
        dataType: 'json',
        success: function(d){

            if(d.resultCode == 200 ){
                //change check todo
				console.log(d);

                return false;
            }else{
                alert("로그인에 실패하였습니다\n다시 시도 해주세요");
                return false;
            }
        },
		error: function(e){
        	alert("error");
		}
    });
}

var ie_ver = get_version_of_IE();

if(ie_ver == "11.0"){
    //var canvasEl = document.querySelector("canvas");
    //console.log(canvasEl);
}

getTimeIcoDate();
canvasFix();
getSendEth();