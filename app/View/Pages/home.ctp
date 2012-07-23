<?php //die(debug($this->request))?>

<section class="container" >
	<header class="menu">
		<ul class="nav nav-pills">
		  <li class=""><a href="#">Home</a></li>
		  <li><a href="#">...</a></li>
		  <li><a href="#">...</a></li>
		</ul>
	</header>
	
	<article class="conteudo span11 well">
		<a name="conteudo"></a>
		<h4>Saborear o delicioso menu do Caesar Park Ipanema ficou ainda mais gostoso</h4>
		<h5>Seja bem vindo ao Gourmet Pass</h5>
		<p>Com ele você tem as seguintes vantagens:</p>
		<ul>
			<li>15% de desconto nas contas do nosso restaurante, lobby bar e feijoadas</li>
			<li>10% de desconto em banquetes e eventos sociais</li>
			<li>Acesso Wi-Fi mediante consumo nos restaurantes</li>
			<li>Jantar de aniversário cortesia</li>
		</ul>
		<p align="center" style="margin-top: 25px;">Faça seu cadastro e aproveite seus benefícios diante da linda Praia de Ipanema</p>
	</article>
	
	<article class="cadastro span11 well" >
		<?php echo $this->Form->create('Cliente', array()); ?>
		<table class="span7 table-form" style="display: block;">
			<tr>
				<td width="170"><label for="nome">Nome:</label></td>
				<td><?php echo $this->Form->input('Cliente.nome', array('label' => false, 'class' => 'span5'))?></td>
			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><?php echo $this->Form->input('Cliente.email', array('label' => false, 'class' => 'span5'))?></td>
			</tr>
			<tr>
				<td><label for="telefone">Telefone:</label></td>
				<td><?php echo $this->Form->input('Cliente.telefone', array('label' => false, 'class' => 'span3'))?></td>
			</tr>
			<tr>
				<td><label for="cep">CEP.:</label></td>
				<td><?php echo $this->Form->input('Cliente.cep', array('label' => false, 'class' => 'span2', 'alt' => 'cep'))?></td>
			</tr>
			<tr>
				<td><label for="endereco">Endereço:</label></td>
				<td><?php echo $this->Form->input('Cliente.endereco', array('label' => false, 'class' => 'span5'))?></td>
			</tr>
			<tr>
				<td><label for="estado">Estado:</label></td>
				<td><?php echo $this->Form->input('Cliente.estado', array('label' => false, 'class' => 'span4'))?></td>
			</tr>
			<tr>
				<td><label for="cidade">Cidade:</label></td>
				<td><?php echo $this->Form->input('Cliente.cidade', array('label' => false, 'class' => 'span4'))?></td>
			</tr>
			<tr>
				<td><label for="data-nascimento">Data de Nascimento:</label></td>
				<td><?php echo $this->Form->input('Cliente.data_nascimento', array('label' => false, 'class' => 'span2', 'alt' => 'date'))?></td>
			</tr>
		</table>
		<div class="span1">
			<p>*Todos os campos são obrigatórios</p>
			<a href="javascript:void(0);" class="btn btn-info span2 botao-termos">Termos e Condições</a>
			<?php echo $this->Form->input('', array('label' => false, 'div' => false, 'value' => 'enviar', 'class' => 'span1 btn btn-success botao-cadastro'))?>
		</div>
		<?php echo $this->form->end(); ?>
	</article>
</section>