/**
 *
 * @author Jefferson Souza
 * @package Cakeapp Twitter Bootstrap
 * 
 */

jQuery(function($){
	// Menu Flutuante
	offset = $(".menu").offset();
	
	$(window).scroll(function() {
        if ($(window).scrollTop() > offset.top) {
            $(".menu").stop().animate({
                marginTop: $(window).scrollTop() - offset.top + 15
            });
        } else {
            $(".menu").stop().animate({
                marginTop: 0
            });
        };
    });
	
	// Mascara de Preenchimento
	$('input, textarea').setMask({ textAlign : false });

	// Ferramenta de Tooltips
	$('.tooltips').tooltip();
	
	// Scroll to Element
	$('.menu-principal a').live('click', function(){
		element = $('body .' + $(this).attr('data-href')).position();
		console.log(element);
		$('html, body').animate({
			scrollTop: element.top
		},1300);
	});
	
});