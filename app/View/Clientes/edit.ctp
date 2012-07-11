<div class="clientes form">
<?php echo $this->Form->create('Cliente');?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('cep');
		echo $this->Form->input('estado');
		echo $this->Form->input('cidade');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('data_nascimento');
		echo $this->Form->input('token');
		echo $this->Form->input('crated');
		echo $this->Form->input('Premio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Premios'), array('controller' => 'premios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add')); ?> </li>
	</ul>
</div>
