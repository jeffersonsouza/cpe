/**
 *
 * @author Jefferson Souza
 * @package Cakeapp Twitter Bootstrap
 * 
 */

jQuery(function($){
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
	
	
});