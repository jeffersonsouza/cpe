<div class="clientesPremios index">
	<h2><?php echo __('Clientes Premios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('cliente_id');?></th>
			<th><?php echo $this->Paginator->sort('premio_id');?></th>
			<th><?php echo $this->Paginator->sort('ip');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clientesPremios as $clientesPremio): ?>
	<tr>
		<td><?php echo h($clientesPremio['ClientesPremio']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientesPremio['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clientesPremio['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientesPremio['Premio']['id'], array('controller' => 'premios', 'action' => 'view', $clientesPremio['Premio']['id'])); ?>
		</td>
		<td><?php echo h($clientesPremio['ClientesPremio']['ip']); ?>&nbsp;</td>
		<td><?php echo h($clientesPremio['ClientesPremio']['created']); ?>&nbsp;</td>
		<td><?php echo h($clientesPremio['ClientesPremio']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientesPremio['ClientesPremio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientesPremio['ClientesPremio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientesPremio['ClientesPremio']['id']), null, __('Are you sure you want to delete # %s?', $clientesPremio['ClientesPremio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Clientes Premio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Premios'), array('controller' => 'premios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add')); ?> </li>
	</ul>
</div>
