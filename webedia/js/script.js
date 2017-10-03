$(function(){
        // Check the initial Poistion of the Sticky Header
        var Scrolled = $('.header-menu').offset().top;

        $(window).scroll(function(){
			if( $(window).scrollTop() > Scrolled ) {
					$('.header-menu').css({position: 'fixed', top: '0px'});
			} else {
					$('.header-menu').css({position: 'static', top: '0px'});
			}
        });
		
	$('.button').click(function() {
	  $('#main').toggleClass('active');
	});
	
	$('section.conteudo').first().addClass("first");
	
	$(document).ready(function(){
		$('.gallery').slick({
		  arrows: true,
		  swipe: true,
		  slidesToShow: 1,
		  infinite: true,
		  speed: 800,
		  fade: false,
		  adaptiveHeight: true
		})
	});
	
  });