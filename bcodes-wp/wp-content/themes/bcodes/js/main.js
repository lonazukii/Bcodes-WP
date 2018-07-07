
(function($){
jQuery(window).scroll(function() {
    if (jQuery(document).scrollTop() > 50) {
        jQuery('.navbar').addClass('menu-shrink');
        jQuery('.topcontrol').css({display:'block'});
        jQuery('.nav-link').css({color:'#000'});
    } else {
        jQuery('.navbar').removeClass('menu-shrink');
        jQuery('.topcontrol').css({display:'none'});
        jQuery('.nav-link').css({color:'#fff'});
    }
});

jQuery(document).ready(function(){
	// Active WOW Animation
	new WOW().init();
	// Navbar Custom
	$('.menu-item a').addClass('nav-link');
  	$('.nav-link').css({color:'#fff'});
	// OWL Carousel Custom
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
	// Smooth Scroll
	$('#primary-menu > li a').click(function(e) {
		e.preventDefault();
    	var sectionTo = $(this).attr('href');
    	console.log(sectionTo);
    		$('html, body').animate({
      			scrollTop: $(sectionTo).offset().top - 80
    		}, 1000);
		});
	//Go back to Top Button
	$('#topcontrol').click(function(e) {
		e.preventDefault();
    		$('html, body').animate({
      			scrollTop: 0
    		}, 600);
		});
	});
	
})(jQuery)