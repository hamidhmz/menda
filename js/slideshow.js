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
			autoPlay: false,
			singleItem: true,
			navigation: false,
			navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			pagination: false
		});
	/*slideshow script code end here*/
	
	/*latest products script code start here*/
	$('.latest-products').owlCarousel({
			items: 1,
			autoplay: false,
			nav: true,
			loop:true,
			navText: ['<i class="fa fa-angle-left faleft"></i>', '<i class="fa fa-angle-right faright"></i>'],
			pagination: false
		});
	/*latest products script code end here*/
	
	/*popular products script code start here*/
	$('.popular-products').owlCarousel({
			items: 1,
			autoplay: false,
			nav: true,
			loop:true,
			navText: ['<i class="fa fa-angle-left faleft"></i>', '<i class="fa fa-angle-right faright"></i>'],
			pagination: false
		});
	/*popular products script code end here*/
	
	/*bestseller products script code start here*/
	$('.bestseller').owlCarousel({
			items: 1,
			autoplay: false,
			nav: true,
			loop:true,
			navText: ['<i class="fa fa-angle-left faleft"></i>', '<i class="fa fa-angle-right faright"></i>'],
			pagination: false
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
	
	//faq
	$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().removeClass("active").addClass("active");
	$(this).parent().find(".fa-plus-square-o").removeClass("fa-plus-square-o").addClass("fa-minus-square-o");
	}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".fa-minus-square-o").removeClass("fa-minus-square-o").addClass("fa-plus-square-o");
	$(this).parent().removeClass("active").addClass("");
	});
	
	$(function () {
		$('.add').on('click',function(){
			var $qty=$(this).closest('p').find('.qty');
			var currentVal = parseInt($qty.val());
			if (!isNaN(currentVal)) {
				$qty.val(currentVal + 1);
			}
		});
		$('.minus').on('click',function(){
			var $qty=$(this).closest('p').find('.qty');
			var currentVal = parseInt($qty.val());
			if (!isNaN(currentVal) && currentVal > 0) {
			$qty.val(currentVal - 1);
		}						
		});
	});
	
	// Product List
	$('#list-view').on('click',function(){
		$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});
	
	// Product Grid
	$('#grid-view').on('click',function(){
		$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	
});