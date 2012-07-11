<div class="premios view">
<h2><?php  echo __('Premio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($premio['Premio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($premio['Premio']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parceiro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($premio['Parceiro']['id'], array('controller' => 'parceiros', 'action' => 'view', $premio['Parceiro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($premio['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $premio['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($premio['Premio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($premio['Premio']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Premio'), array('action' => 'edit', $premio['Premio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Premio'), array('action' => 'delete', $premio['Premio']['id']), null, __('Are you sure you want to delete # %s?', $premio['Premio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Premios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parceiros'), array('controller' => 'parceiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parceiro'), array('controller' => 'parceiros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes');?></h3>
	<?php if (!empty($premio['Cliente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Data Nascimento'); ?></th>
		<th><?php echo __('Token'); ?></th>
		<th><?php echo __('Crated'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($premio['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id'];?></td>
			<td><?php echo $cliente['nome'];?></td>
			<td><?php echo $cliente['endereco'];?></td>
			<td><?php echo $cliente['cep'];?></td>
			<td><?php echo $cliente['estado'];?></td>
			<td><?php echo $cliente['cidade'];?></td>
			<td><?php echo $cliente['telefone'];?></td>
			<td><?php echo $cliente['email'];?></td>
			<td><?php echo $cliente['data_nascimento'];?></td>
			<td><?php echo $cliente['token'];?></td>
			<td><?php echo $cliente['crated'];?></td>
			<td><?php echo $cliente['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), null, __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
