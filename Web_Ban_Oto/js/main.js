/**slider**/
$(document).ready(function(){
	    $('.bx-slider').bxSlider({
	    	auto:true
	    });

  });
/**back-top**/
$(document).ready(function(){
	if($(window).scrollTop() > 300){
		$('.back-top').fadeIn();
	}else{
		$('.back-top').fadeOut();
	}

	$(window).scroll(function () {
	        if ($(this).scrollTop() > 300) {
			$('.back-top').fadeIn();
	        } else {
	            	$('.back-top').fadeOut();
	        }
	});
 
	$('.back-top').click(function () {
	        $("html, body").animate({
	            	scrollTop: 0
	        }, 300);
	        return false;
	});
});
/** fixed-menu** */
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>200){
			$('.menu').addClass("menu-fixed");
		}else{
			$('.menu').removeClass("menu-fixed");
		}
	});
});

/**chuyen-muc**/
$(document).ready(function(){
	 $('#click-search').click(function(){
	 	$('.search').show(300);
	 });
	 $('#exit').click(function(){
	 	$('.search').hide(300);
	 });
	 
});

/**menu**/
$(document).ready(function(){
	$('.menu-center li').hover(function(){

		$(this).find("ul:first").css({visibility:"visible",display:"none"}).show(500);},
		function(){
			$(this).find("ul:first").css({visibility:"hidden"}).show(100);

		});
});



