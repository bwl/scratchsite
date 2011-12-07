$(document).ready(function() {

	resize_top_bar();

	$(window).resize(function() {
		resize_top_bar();
	});
	
	

	var contentPosition = 0;
	
	$('.arrow-right').click(function() {
		$('#content').animate({left:'-=204px'}, 600);
		contentPosition--;
	});

	$('.arrow-center').click(function() {
		$('#content').animate({left:'204px'}, 600);
		contentPosition = 0;
	});

	$('.arrow-left').click(function() {
		if (contentPosition < 0) {
			$('#content').animate({left:'+=204px'}, 600);
			contentPosition++;
		}
	});

	$('ul#sidebar li').first().click(function() {
		$('#overlay-gallery').fadeIn();
	});

	$('#overlay-gallery').click(function(){
		$(this).fadeOut();
	});

	$('ul#sidebar li').eq(1).click(function() {
		fire_supersized();
		$('#content-copy-block').hide();
		$('#content').hide();
		$('.arrows').hide();
	});

	$('ul#sidebar li').eq(2).click(function() {
		$('#big-gallery').fadeOut();
		$('#content-copy-block').show();
		$('#content').show();
		$('.arrows').show();
	});

});


function resize_top_bar(){

	var title_width = $(window).width() - 212;
	$('#title-area').css('width', title_width);

}


function fire_supersized(){
    $.supersized({
    	slides: [{image : 'overlay-images/charles-big.jpg'}],
    	autoplay: 0,
    	performance: 1,
    	fit_always: 0,
    	random:0,
    	horizontal_center: 1,
    	fit_portrait: 0,
    	image_protect: 1,
		transition: 1,
		transition_speed: 1000
		});
}
