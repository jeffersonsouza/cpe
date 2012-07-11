<div class="parceiros form">
<?php echo $this->Form->create('Parceiro');?>
	<fieldset>
		<legend><?php echo __('Edit Parceiro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('url');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Parceiro.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Parceiro.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Premios'), array('controller' => 'premios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add')); ?> </li>
	</ul>
</div>
