function loadscroler(){
	$('body').prepend('<a href="#" class="bottom-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>');
	var amountScrolled = 300;
	$(window).on('scroll',function() {
		if ( $(window).scrollTop() > amountScrolled ) {
			$('a.bottom-top').fadeIn('slow');
		} else {
			$('a.bottom-top').fadeOut('slow');
		}
	});
	$('a.bottom-top').on('click',function() {
		$('html, body').animate({
			scrollTop: 0
		}, 700);
		return false;
	});
}
$(document).on('ready',function(){ 
	loadscroler();
	
	/*slideshow script code start here*/
	$('#slideshow').owlCarousel({
			items: 1,
			autoplay: false,
			nav: true,
			loop:true,
			navText: ['<i class="fa fa-angle-left faleft"></i>', '<i class="fa fa-angle-right faright"></i>'],
			pagination: false
		});
	/*slideshow script code end here*/
	
	/*latest products script code start here*/
		$(".popular-products").slick({
				infinite: false,
				vertical:false,
				slidesToShow: 1,
			  slidesToScroll: 1,
			  responsive: [
				{
				  breakpoint: 1024,
				  settings: {
					slidesToShow: 1,
					slidesToScroll:1,
					infinite: true,
					dots: false
				  }
				},
				{
				  breakpoint: 600,
				  settings: {
					slidesToShow: 1,
					slidesToScroll:1
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
				
			  ]
		});
	/*latest products script code end here*/
	
	/*bestseller products script code start here*/
		$(".bestseller").slick({
				infinite: false,
				vertical:false,
				slidesToShow: 1,
			  slidesToScroll: 1,
			  responsive: [
				{
				  breakpoint: 1024,
				  settings: {
					slidesToShow: 1,
					slidesToScroll:1,
					infinite: true,
					dots: false
				  }
				},
				{
				  breakpoint: 600,
				  settings: {
					slidesToShow: 1,
					slidesToScroll:1
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
				
			  ]
		});
	/*bestseller products script code end here*/
	
	/*testimonial script code start here*/
		$('.user-view').owlCarousel({
			items: 1,
			autoplay: false,
			nav: true,
			loop:true,
			navText: ['<i class="fa fa-chevron-left fa1"></i>', '<i class="fa fa-chevron-right fa2"></i>'],
			pagination: true
		});
	/*testimonial script code end here*/
	
	/*Gallery script code start here*/
		$('.gallery').owlCarousel({
			items: 10,
			autoplay: false,
			nav: false,
			loop:true,
			navText: ['<i class="fa fa-chevron-left fa1"></i>', '<i class="fa fa-chevron-right fa2"></i>'],
			pagination: false,
			responsive:{ 
				0:{
				  items:2
				},
				768:{ 
				   items:5,
				  nav: true
				},
				970:{
				  items:10
				}
			}
		});
	/*Gallery script code end here*/
	
    
        $('.image-popup').magnificPopup({
			items: {
			  src: 'images/thumb-1.jpg'
			},
          type: 'image',
		  gallery:{enabled:true},
		  removalDelay: 300,
          mainClass: 'mfp-fade'
		});
		
    //menu
	$('ul .dropdown').on('hover',function () {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function () {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});