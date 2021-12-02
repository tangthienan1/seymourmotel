$(function(){

	// global varibles
	ww = $(window).width();
	wh = $(window).height();
	// find header height
	headerHeight = $('.header').height() + parseInt($(".header").css('padding-top').substr(0, 2) )+ parseInt($(".header").css('padding-bottom').substr(0, 2));
	// find mobile header height
	headerMHeight = $('.header-mbl').height() + parseInt($(".header-mbl").css('padding-top').substr(0, 2) )+ parseInt($(".header-mbl").css('padding-bottom').substr(0, 2));
	// scrollbar js initialization
	$(".nano").nanoScroller();

	//make header fixed on scroll
	$(window).scroll(function(){
		scrolledTop = $(window).scrollTop();
		if(scrolledTop >= 1){
			$('.header,.header-mbl').addClass('sticky-header');
		}
		else{
			$('.header,.header-mbl').removeClass('sticky-header');
		}
	});

	
	// slider script
	manageSlider = function(){
		$('.myslider').height(wh);
	}
	manageSlider();
	$(window).bind('load resize orientationchange', function(){
		wh = $(window).height();
		ww = $(window).width();
		manageSlider();
	});

	$(window).scroll(function(){
		scrolledTop = $(window).scrollTop();
		if(scrolledTop > wh){
			$('.socials').addClass('showSocials');
			$('.goTop').addClass('showGoTop');
		}
		else{
			$('.socials').removeClass('showSocials');
			$('.goTop').removeClass('showGoTop');
		}
	});

	$('.goTop a').click(function(){
		$('body,html').animate({
			scrollTop: 0
		}, 500);
	});

	//offcanvas right
	$('.toggle a').click(function(e){
		findBodyClass = $('#pushIt').hasClass('push-body push-right');
		if(findBodyClass){
			$('.body-inactive').hide();
			$('.header-mbl').removeClass('push-header');
			$('#pushIt').removeClass('push-body push-right');
			$('.offcanvas').removeClass('show-offcanvas');
		}
		else{
			$('.body-inactive').show();
			$('.header-mbl').addClass('push-header');
			$('#pushIt').addClass('push-body push-right');
			$('.offcanvas').addClass('show-offcanvas');
		}
		$(this).addClass('rotate');
		e.preventDefault();	

		$('.body-inactive').on('touchmove',function(e){
			if($('#pushIt').hasClass('push-body')){
				return false;
			}
			else{
				return true;
			}
		});

	});
	$('.body-inactive').click(function(){
		$('.header-mbl').removeClass('push-header');
		$('#pushIt').removeClass('push-body push-right');
		$('.offcanvas').removeClass('show-offcanvas');
		$('.toggle a').removeClass('rotate');
		$(this).hide();
	});

	// cloning menu items in mobile
	$mobileNav = $('<div id="mobileNav"></div>').prependTo('.offcanvas .offcanvas-content');
	$mobileNav.append($('.mynav').clone());

	// clicking on menu items dropdown in menu
	$('#mobileNav .menu-item-has-children > a').click(function(e){
		findDisplay = $(this).parent().children('ul').css('display');
		if(findDisplay == "none"){
			$('#mobileNav .menu-item-has-children ul').slideUp(350);
			$(this).parent().children('ul').slideDown(350);
		}
		else{
			$(this).children('a').children('i').children('span').fadeOut(350);
			$(this).parent().children('ul').slideUp(350);
		}
		e.preventDefault();
	});

})