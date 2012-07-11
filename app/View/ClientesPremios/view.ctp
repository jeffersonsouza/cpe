<div class="clientesPremios view">
<h2><?php  echo __('Clientes Premio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientesPremio['ClientesPremio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientesPremio['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clientesPremio['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Premio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientesPremio['Premio']['id'], array('controller' => 'premios', 'action' => 'view', $clientesPremio['Premio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($clientesPremio['ClientesPremio']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clientesPremio['ClientesPremio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clientesPremio['ClientesPremio']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clientes Premio'), array('action' => 'edit', $clientesPremio['ClientesPremio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clientes Premio'), array('action' => 'delete', $clientesPremio['ClientesPremio']['id']), null, __('Are you sure you want to delete # %s?', $clientesPremio['ClientesPremio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes Premios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clientes Premio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Premios'), array('controller' => 'premios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add')); ?> </li>
	</ul>
</div>
