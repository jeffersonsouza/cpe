<div class="premios index">
	<h2><?php echo __('Premios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('parceiro_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($premios as $premio): ?>
	<tr>
		<td><?php echo h($premio['Premio']['id']); ?>&nbsp;</td>
		<td><?php echo h($premio['Premio']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($premio['Parceiro']['id'], array('controller' => 'parceiros', 'action' => 'view', $premio['Parceiro']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($premio['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $premio['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($premio['Premio']['created']); ?>&nbsp;</td>
		<td><?php echo h($premio['Premio']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $premio['Premio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $premio['Premio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $premio['Premio']['id']), null, __('Are you sure you want to delete # %s?', $premio['Premio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Premio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('controller' => 'parceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parceiro'), array('controller' => 'parceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
