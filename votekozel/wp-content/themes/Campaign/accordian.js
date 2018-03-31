jQuery(document).ready(function($){
	$('#priorities p.explain').hide();
	$('#priorities h3').click(function(){
		$(this).next('p').slideToggle(350);
		$(this).children('span').toggleClass('flipped');
	});



});