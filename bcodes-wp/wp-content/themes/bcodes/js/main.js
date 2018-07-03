
(function($){
jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 50) {
        jQuery('.navbar').addClass('menu-shrink');
        jQuery('.topcontrol').css({display:'block'});
    } else {
        jQuery('.navbar').removeClass('menu-shrink');
        jQuery('.topcontrol').css({display:'none'});
    }
});
jQuery(document).ready(function(){
	new WOW().init();

	$('.testimoni-carousel').owlCarousel({
			center:true,
			loop:true,
			mouseDrag : false,
      		autoplay: 3000,
      		items : 1,
		});
	$('.partner').owlCarousel({
			loop:true,
			mouseDrag : false,
      		autoplay: 3000,
      		items : 4,
      		responsiveClass:true,
    		responsive:{
    			0:{
		            items:1,
		            center:true,
		        },
		        640:{
		            items:2,
		        },
		        1000:{
		            items:4,
		        }
		    }
		});
	$('.slide-popup').owlCarousel({
			loop:false,
			mouseDrag : false,
      		items : 1,
      		nav:true,
      		dots: false,
		});
	$('#primary-menu > li a').click(function(e) {
		e.preventDefault();
    	var sectionTo = $(this).attr('href');
    	console.log(sectionTo);
    		$('html, body').animate({
      			scrollTop: $(sectionTo).offset().top - 80
    		}, 1500);
		});
	$('#topcontrol').click(function(e) {
		e.preventDefault();
    		$('html, body').animate({
      			scrollTop: 0
    		}, 600);
		});
	});
})(jQuery)