/**
 * @author Jefferson Souza
 * @contact hsinfo@gmail.com
 * @package Eventos -  Caesar Park
 */

jQuery(function($){
	// Mascara de Preenchimento
	$('input, textarea').setMask({ textAlign : false });
	
	// Ferramenta de Tooltips
	$('.tooltips').tooltip();
	
	$('#cadastrar-parceiro').live('click',function(){
		// Abre loader de cadastro
		$('.modal-edicao ').fadeIn();
		
		// Organiza os campos para enviar via AJAX
		var campos = {};
		
		campos['data[Parceiro][nome]'] = $('#nome').val();
		campos['data[Parceiro][email]'] = $('#email').val();
		campos['data[Parceiro][telefone]'] = $('#telefone').val();
		campos['data[Parceiro][contato]'] = $('#nome-contato').val();
		campos['data[Parceiro][site]'] = $('#site').val();
		campos['data[Parceiro][razao_social]'] = $('#razao-social').val();
		
		// Verifica se existe o campo id, caso exista, será uma edição e não criação
		if($('#form-cadastro #id').length == 1){
			campos['data[Parceiro][id]'] = $('#form-cadastro #id').val();
		}
		
		// Executa o cadastro via AJAX
		$.post('/admin/parceiros/salvar', campos, function(retorno){
			// Checa a resposta (em JSON)
			if(retorno.response == 'true'){
				// Verfica se é criação ou atualização
				if(retorno.tipo == 'create'){
					// Se for criação, ele já coloca no final da tabela
					$('#listar-parceiros').append(retorno.append);
				} else if(retorno.tipo == 'update'){
					// Se for só uma atualização, ele busca o registro na tabela HTML e já atualiza com as novas informações
					$('#' + $('#form-cadastro #id').val() + ' td:eq(1)').html($('#nome').val());
					// Remove o campo oculto ID, que só eve existir de for atualização
					$('#form-cadastro #id').remove();
				}
				// Limpa os campos do formulário
				$('#form-cadastro input:text').val('');
			} else {
				// Mensagem para quando falhar o Save
			}
			
		});
	});

	$('.editar-parceiro').live('click',function(){
		// Captura o ID do Parceiro
		id = $(this).parent().parent().attr('id');
		// Abre o loader de cadastro/edição
		$('.modal-edicao ').fadeIn();
		// Faz a requisição para pegar os dados do Parceiro
		$.post('/admin/parceiros/dados/' + id, null, function(Parceiro){
			/* 
			 * @TODO Verificar se não houve erro na requisição, antes de preencher os campos do form
			 */
			
			// Preenche o formulário com os dados recebidos do Parceiro			
			$('#form-cadastro form').append('<input id="id" value="' + Parceiro.id + '" type="hidden" />');
			$('#nome').val(Parceiro.nome);
			$('#telefone').val(Parceiro.telefone);
			$('#email').val(Parceiro.email);
			$('#nome-contato').val(Parceiro.contato);
			$('#site').val(Parceiro.site);
			$('#razao-social').val(Parceiro.razao_social);
			$('.modal-edicao ').fadeOut();
		});
	});
	
	$('#limpa-cadastro').live('click', function(){
		// Limpa o formulário quando o botão cancelar é acionado
		$('#form-cadastro input:text').val('');
		$('#form-cadastro #id').remove();
	});
	
	$('.remover-parceiro').live('click',function(){
		// Caixa de confirmação para remover o Parceiro
		if(confirm('Tem certeza que deseja REMOVER este parceiro?')){
			// Se confirmar, pega o id do Parceiro...
			parceiro = $(this).parent().parent();
			// ... e faz a requisição para deletar
			$.post('/admin/parceiros/delete/' + parceiro.attr('id'), null, function(retorno){
				// se o retorno da requisição for true
				if(retorno.response == 'true'){
					// Faz ele sumir com um fadeOut e depois remove do DOM
					parceiro.fadeOut('slow', function(){
						parceiro.remove();
					});
				}
			});
		}
	});
});
