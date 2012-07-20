<?php //die(debug($this->request));
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
		<table class="table table-striped table-bordered table-condensed" id="listar-parceiros">
			<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('nome');?></th>
				<th><?php echo $this->Paginator->sort('url', 'Link de Acesso');?></th>
				<th><?php echo $this->Paginator->sort('created', 'Data de Cadastro');?></th>
				<th width="50"><?php echo $this->Paginator->sort('Ações');?></th>
			</tr>
			<?php foreach($parceiros as $key => $parceiro): ?>
			<tr id="<?php echo $parceiro['Parceiro']['id']; ?>">
				<td>#<?php echo $parceiro['Parceiro']['id']; ?></td>
				<td><?php echo $parceiro['Parceiro']['nome']; ?></td>
				<td><a target="_blank" href="<?php echo $parceiro['Parceiro']['url']; ?>"><?php echo $parceiro['Parceiro']['url']; ?></a></td>
				<td><?php echo $this->Time->format('d-m-Y H:i', $parceiro['Parceiro']['created']); ?></td>
				<td>
					<a href="javascript:void(0);" class="tooltips" title="Definir prêmio para clientes"><i class="icon-gift adicionar-premio"></i></a>
					<a href="javascript:void(0);" class="tooltips" title="Editar este parceiro"><i class="icon-edit editar-parceiro"></i></a>
					<a href="javascript:void(0);" class="tooltips" title="Remover este parceiro"><i class="icon-remove-sign remover-parceiro"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</article>
	
	<section class="span3 well" id="form-cadastro">
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