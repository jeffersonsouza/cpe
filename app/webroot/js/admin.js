/**
 * @author Jefferson Souza
 * @package Eventos -  Caesar Park
 */

jQuery(function($){
	$('input, textarea').setMask({ textAlign : false });
	
	$('#cadastrar-parceiro').click(function(){
		var campos = {
			'data[Parceiro][nome]' : $('#nome').val(),
			'data[Parceiro][email]' : $('#email').val(),
			'data[Parceiro][telefone]' : $('#telefone').val(),
			'data[Parceiro][contato]' : $('#nome-contato').val(),
			'data[Parceiro][site]' : $('#site').val(),
			'data[Parceiro][razao_social]' : $('#razao-social').val()
		};
		
		$.post('/admin/parceiros/salvar', campos, function(retorno){
			console.log(retorno);
		});
	});
});
