<?php //die(debug($this->request))?>

<section class="container topo" >
	<header class="menu">
		<ul class="nav nav-pills menu-principal">
		  <li class=""><a href="javascript:void(0);" data-href="topo">Topo</a></li>
		  <li><a href="javascript:void(0);" data-href="conteudo">Gourmet Pass</a></li>
		  <li><a href="javascript:void(0);" data-href="cadastro">Cadastro</a></li>
		</ul>
	</header>
	
	<article class="conteudo span11 well">
		<a name="gourmet-pass"></a>
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
		<div class="thumbnails">
			<img src="http://placehold.it/120x120" alt="imagem padrão" class="thumbnail tooltips span2" title="Imagem padrão, este texto poderá ser substituido por outro qualquer" />
			<img src="http://placehold.it/120x120" alt="imagem padrão" class="thumbnail tooltips span2" title="Imagem padrão, este texto poderá ser substituido por outro qualquer" />
			<img src="http://placehold.it/120x120" alt="imagem padrão" class="thumbnail tooltips span2" title="Imagem padrão, este texto poderá ser substituido por outro qualquer" />
			<img src="http://placehold.it/120x120" alt="imagem padrão" class="thumbnail tooltips span2" title="Imagem padrão, este texto poderá ser substituido por outro qualquer" />
			<img src="http://placehold.it/120x120" alt="imagem padrão" class="thumbnail tooltips span2" title="Imagem padrão, este texto poderá ser substituido por outro qualquer" />
			
		</div>
	</article>
	
	<article class="cadastro span11 well" >
		<a name="cadastro"></a>
		<h4>CADASTRO</h4>
		<p>Preencha corretamente os seus dados e concorra a nossos prêmios.</p>
		<?php echo $this->Form->create('Cliente', array()); ?>
		<table class="span7 table-form" style="display: block;">
			<tr>
				<td width="170" valign="top"><label for="nome">Nome:</label></td>
				<td><?php echo $this->Form->input('Cliente.nome', array('label' => false, 'class' => 'span5','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')))); ?></td>
			</tr>
			<tr>
				<td valign="top"><label for="email">Email:</label></td>
				<td><?php echo $this->Form->input('Cliente.email', array('label' => false, 'class' => 'span5','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
			<tr>
				<td valign="top"><label for="telefone">Telefone:</label></td>
				<td><?php echo $this->Form->input('Cliente.telefone', array('label' => false, 'class' => 'span3','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
			<tr>
				<td valign="top"><label for="cep">CEP.:</label></td>
				<td><?php echo $this->Form->input('Cliente.cep', array('label' => false, 'class' => 'span2', 'alt' => 'cep','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
			<tr>
				<td valign="top"><label for="endereco">Endereço:</label></td>
				<td><?php echo $this->Form->input('Cliente.endereco', array('label' => false, 'class' => 'span5','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
			<tr>
				<td valign="top"><label for="estado">Estado:</label></td>
				<td><?php echo $this->Form->input('Cliente.estado', array('label' => false, 'class' => 'span4','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
			<tr>
				<td valign="top"><label for="cidade">Cidade:</label></td>
				<td><?php echo $this->Form->input('Cliente.cidade', array('label' => false, 'class' => 'span4','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
			<tr>
				<td valign="top"><label for="data-nascimento">Data de Nascimento:</label></td>
				<td><?php echo $this->Form->input('Cliente.data_nascimento', array('label' => false, 'class' => 'span2', 'alt' => 'date','error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))))?></td>
			</tr>
		</table>
		<div class="span1">
			<p>*Todos os campos são obrigatórios</p>
			<a href="javascript:void(0);" class="btn btn-info span2 botao-termos">Termos e Condições</a>
			<?php echo $this->Form->input('enviar', array('type' => 'submit','label' => false, 'div' => false, 'value' => 'enviar', 'class' => 'span2 btn btn-success botao-cadastro'))?>
		</div>
		<?php echo $this->form->end(); ?>
	</article>
</section>