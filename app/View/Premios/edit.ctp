<div class="premios form">
<?php echo $this->Form->create('Premio');?>
	<fieldset>
		<legend><?php echo __('Edit Premio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('parceiro_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('Cliente');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Premio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Premio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Premios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('controller' => 'parceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parceiro'), array('controller' => 'parceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
