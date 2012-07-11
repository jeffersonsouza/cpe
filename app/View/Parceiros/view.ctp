<div class="parceiros view">
<h2><?php  echo __('Parceiro');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parceiro['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $parceiro['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($parceiro['Parceiro']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parceiro'), array('action' => 'edit', $parceiro['Parceiro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parceiro'), array('action' => 'delete', $parceiro['Parceiro']['id']), null, __('Are you sure you want to delete # %s?', $parceiro['Parceiro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parceiro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Premios'), array('controller' => 'premios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Premios');?></h3>
	<?php if (!empty($parceiro['Premio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Parceiro Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($parceiro['Premio'] as $premio): ?>
		<tr>
			<td><?php echo $premio['id'];?></td>
			<td><?php echo $premio['nome'];?></td>
			<td><?php echo $premio['parceiro_id'];?></td>
			<td><?php echo $premio['usuario_id'];?></td>
			<td><?php echo $premio['created'];?></td>
			<td><?php echo $premio['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'premios', 'action' => 'view', $premio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'premios', 'action' => 'edit', $premio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'premios', 'action' => 'delete', $premio['id']), null, __('Are you sure you want to delete # %s?', $premio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
