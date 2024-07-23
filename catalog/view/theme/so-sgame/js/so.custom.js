/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 
	




// custom bar
$(document).ready(function(){
    $(".custom-bar .close-bar").on('click',function(){
        if($('.custom-bar').hasClass('active')){
            $('.custom-bar').removeClass('active');
        }else{
            $('.custom-bar').removeClass('active');
            $('.custom-bar').addClass('active');
        }
     });
});
	
	// video

	$(document).ready(function() {
	    $('.home1-video').magnificPopup({
	      type: 'iframe',
	      iframe: {
	      patterns: {
	         youtube: {
	          index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
	          id: 'v=', // String that splits URL in a two parts, second part should be %id%
	          src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
	          },
	        }
	      }
	    });
	});


	// Close pop up countdown
	 $( "#so_popup_countdown .customer a" ).click(function() {
	  $('body').toggleClass('hidden-popup-countdown');
	 });
	// =========================================


	// click header search header 
	// jQuery(document).ready(function($){
	// 	$( ".search-header-w .icon-search" ).click(function() {
	// 	$('#sosearchpro .search').slideToggle(200);
	// 	$(this).toggleClass('active');
	// 	});
	// });

	// click header search header 
	jQuery(document).ready(function($){
		$('.search-header-w .icon-search').click(function(e){
          e.preventDefault();
          $('#sosearchpro .search').toggleClass("nav-open");
          $('.search-screen').addClass("nav-open");
          $('.search-header-w .icon-search').addClass("active");
          //$(this).toggleClass('active');
        });
	
        $('.search-screen ').click(function(e){
          e.preventDefault();
          $(this).toggleClass("nav-open");
          $('#sosearchpro .search').removeClass("nav-open");
          $('.search-header-w .icon-search').removeClass("active");
        });
	});
        
	
	//slider categories
	jQuery(document).ready(function($) {
	    var slidercate = $(".categories-layout3 .cat-wrap");
	    slidercate.owlCarousel2({    
	    margin: 29,
	    nav:false,
	    loop: true,
	    dots: true,
	    rows: 1,
	    navText: ['',''],
	    responsive:{
	            0:{
	                items:1
	            },
	            480:{
	                items:2
	            },
	            768:{
	                items:3
	            },
	            992:{
	                items:4
	            },
	            1200:{
	                items:4
	            },
	            1365:{
	                items:5
	            },
	        },
	    })
	});

	
	// nav scroll
	jQuery(function(){
		$(window).load(function() {
			var hei1 = $('.typeheader-1').outerHeight();
			var hei2 = $('.slideshow1').outerHeight();
			var hei = hei1 + hei2;			
			
			var navScroll = $("#box-link1");
			
			// if (navScroll.length > 0) {
			// 	jQuery(".custom-scroll").css("top",hei);
	  		//       }
	  		if (navScroll.length > 0) {				
				//jQuery(".custom-scroll").css("top",hei);
				jQuery(".custom-scroll").css("display","none");

				$(window).scroll(function() {
					if( $(window).scrollTop() > navScroll.offset().top  ) {						
						jQuery(".custom-scroll").css("display","block");
					} 
					else {				
						//jQuery(".custom-scroll").css("top",navScroll.offset().top);
						jQuery(".custom-scroll").css("display","none");
					}
			
				});

	        }

	    })
	});

	jQuery(function(){
		$('#nav-scroll').onePageNav({
			currentClass: 'active',
			changeHash: false,
			scrollSpeed: 750,
			scrollThreshold: 0.5,
			filter: '',
			easing: 'swing',
			
		});

		
	});

	
	// custom to show footer center
	$(".description-toggle").click(function () {
		if($('.showmore').hasClass('active'))
			$('.showmore').removeClass('active');
		else
			$('.showmore').addClass('active');
	}); 


	$(".content-product-content .button-toggle").click(function () {
		if($(this).children('.showmore').hasClass('active')) $(this).children().removeClass('active');
		else $(this).children().addClass('active');
		
		
		
		if($(this).prev().hasClass('showdown')) $(this).prev().removeClass('showdown').addClass('showup');
		else $(this).prev().removeClass('showup').addClass('showdown');
	}); 

	$(".clearable").each(function() {
  
	  var $inp = $(this).find("input:text"),
	      $cle = $(this).find(".clearable__clear");

	  $inp.on("input", function(){
	    $cle.toggle(!!this.value);
	  });
	  
	  $cle.on("touchstart click", function(e) {
	    e.preventDefault();
	    $inp.val("").trigger("input");
	  });
	  
	});

});
