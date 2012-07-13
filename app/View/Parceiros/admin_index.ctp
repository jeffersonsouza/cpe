<?php
// Incluir js para validação de campos
$this->start('script');
echo $this->Html->script(array('jquery.meio.mask.min', 'admin'));
$this->end();

?>

<div class="hero-unit">
	<h2 class="">Parceiros</h2>
	<p>Administrar Parceiros do Site</p>
</div>
<div class="container">
	<article class="span7">
		<table class="table table-striped table-bordered table-condensed">
			<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('nome');?></th>
				<th><?php echo $this->Paginator->sort('url', 'Link de Acesso');?></th>
				<th><?php echo $this->Paginator->sort('created', 'Data de Cadastro');?></th>
			</tr>
		</table>
	</article>
	
	<section class="span3 well">
		<?php echo $this->Form->create('Parceiro'); ?>
		<?php echo $this->Form->input('nome', array('class' => 'span3', 'placeholder' => 'nome do parceiro', 'id' => 'nome')); ?>
		<?php echo $this->Form->input('telefone', array('class' => 'span3', 'placeholder' => 'telefone do parceiro', 'id' => 'telefone', 'alt' => 'phone')); ?>
		<?php echo $this->Form->input('email', array('class' => 'span3', 'placeholder' => 'email do parceiro', 'id' => 'email')); ?>
		<?php echo $this->Form->input('contato', array('class' => 'span3', 'placeholder' => 'nome de contato com parceiro', 'id' => 'nome-contato')); ?>
		<?php echo $this->Form->input('site', array('class' => 'span3', 'placeholder' => 'site do parceiro', 'id' => 'site')); ?>
		<?php echo $this->Form->input('razao_social', array('class' => 'span3', 'placeholder' => 'razão social do parceiro', 'label' => 'Razão Social', 'id' => 'nome')); ?>
		<div class="pull-right">
			<a href="javascript:void(0);" class="btn btn-success" id="cadastrar-parceiro">cadastrar</a>
			<a href="" class="btn btn-inverse">cancelar</a>
		</div>
		<?php echo $this->Form->end(); ?>
	</section>
</div>