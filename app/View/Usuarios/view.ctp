<div class="usuarios view">
<h2><?php  echo __('Usuario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('controller' => 'parceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parceiro'), array('controller' => 'parceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Premios'), array('controller' => 'premios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('controller' => 'premios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Parceiros');?></h3>
	<?php if (!empty($usuario['Parceiro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Parceiro'] as $parceiro): ?>
		<tr>
			<td><?php echo $parceiro['id'];?></td>
			<td><?php echo $parceiro['nome'];?></td>
			<td><?php echo $parceiro['url'];?></td>
			<td><?php echo $parceiro['usuario_id'];?></td>
			<td><?php echo $parceiro['created'];?></td>
			<td><?php echo $parceiro['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'parceiros', 'action' => 'view', $parceiro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parceiros', 'action' => 'edit', $parceiro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parceiros', 'action' => 'delete', $parceiro['id']), null, __('Are you sure you want to delete # %s?', $parceiro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parceiro'), array('controller' => 'parceiros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Premios');?></h3>
	<?php if (!empty($usuario['Premio'])):?>
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
		foreach ($usuario['Premio'] as $premio): ?>
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
