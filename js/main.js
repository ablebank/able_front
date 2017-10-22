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
					() => WebsiteHelper.activate_accordion(name, 'faq_accordion')
				)
			}
		);
  }
}

$(WebsiteHelper.init);
