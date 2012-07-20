<?php die(debug($this->request))?>
<div class="modal">
	<?php echo $this->Form->create('Cliente', array()); ?>
	<table class="table">
		<tr>
			<td><label for="nome">Nome:</label></td>
			<td><?php echo $this->Form->input('Cliente.nome', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="endereco">Endereço:</label></td>
			<td><?php echo $this->Form->input('Cliente.endereco', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="cep">CEP.:</label></td>
			<td><?php echo $this->Form->input('Cliente.cep', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="estado">Estado:</label></td>
			<td><?php echo $this->Form->input('Cliente.estado', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="cidade">Cidade:</label></td>
			<td><?php echo $this->Form->input('Cliente.cidade', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="telefone">Telefone:</label></td>
			<td><?php echo $this->Form->input('Cliente.telefone', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="email">Email:</label></td>
			<td><?php echo $this->Form->input('Cliente.email', array('label' => false))?></td>
		</tr>
		<tr>
			<td><label for="data-nascimento">Data de Nascimento:</label></td>
			<td><?php echo $this->Form->input('Cliente.data_nascimento', array('label' => false))?></td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $this->Form->input('', array('label' => false, 'value' => 'enviar', 'class' => 'btn'))?></td>
		</tr>
	</table>
	<?php echo $this->form->end(); ?>
</div>



<header class="hero-unit">
	<div class="container">
		<h1>Cake App - Twitter Bootstrap</h1>
		<p>A Default CakeApp with power of Twitter Bootstrap</p>
		<p class="pull-right">
			<a class="btn btn-large" href="http://jeffersonsouza.com.br/">Jefferson Souza</a>
			<a class="btn btn-primary btn-large" href="http://github.com/jeffersonsouza">Project Github</a>
			<a class="btn btn-info btn-large" href="http://book.cakephp.org/">Cake Book</a>
		</p>
	</div>
</header>
<section class="container">
	<?php
	if (Configure::read('debug') == 0):
		throw new NotFoundException();
	endif;
	App::uses('Debugger', 'Utility');
	?>
	<?php
	if (Configure::read('debug') > 0):
		Debugger::checkSecurityKeys();
	endif;
	?>
	<p id="url-rewriting-warning" class="alert alert-error">
		<?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
		1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/advanced-installation.html#apache-and-mod-rewrite-and-htaccess" style="color:#fff;">Help me configure it</a>
		2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
	</p>
	<p class="alert alert-<?php echo (version_compare(PHP_VERSION, '5.2.8', '>=')) ? 'success' : 'error'; ?>">
		<?php
		if (version_compare(PHP_VERSION, '5.2.8', '>=')):
			echo '<span class="notice success">';
			echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
			echo '</span>';
		else:
			echo '<span class="notice">';
			echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
			echo '</span>';
		endif;
		?>
	</p>
	<p class="alert alert-<?php echo (is_writable(TMP)) ? 'success' : 'error'; ?>">
		<?php
		if (is_writable(TMP)):
			echo '<span class="notice success">';
			echo __d('cake_dev', 'Your tmp directory is writable.');
			echo '</span>';
		else:
			echo '<span class="notice">';
			echo __d('cake_dev', 'Your tmp directory is NOT writable.');
			echo '</span>';
		endif;
		?>
	</p>
	<?php $settings = Cache::settings(); ?>
	<p class="alert alert-<?php echo (!empty($settings)) ? 'success' : 'error'; ?>">
		<?php
		if (!empty($settings)):
			echo __d('cake_dev', 'The %s is being used for core caching. To change the config edit APP/Config/core.php ', '<em>' . $settings['engine'] . 'Engine</em>');
		else:
			echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in APP/Config/core.php');
		endif;
		?>
	</p>
	<?php
	$filePresent = null;
	if (file_exists(APP . 'Config' . DS . 'database.php'))
		$filePresent = true;
	?>
	<p class="alert alert-<?php echo ($filePresent) ? 'success' : 'error'; ?>">
		<?php
		if ($filePresent):
			echo '<span class="notice success">';
			echo __d('cake_dev', 'Your database configuration file is present.');

			echo '</span>';
		else:
			echo '<span class="notice">';
			echo __d('cake_dev', 'Your database configuration file is NOT present.');
			echo '<br/>';
			echo __d('cake_dev', 'Rename APP/Config/database.php.default to APP/Config/database.php');
			echo '</span>';
		endif;
		?>
	</p>
	<?php
	if (isset($filePresent)):
		App::uses('ConnectionManager', 'Model');
		try {
			$connected = ConnectionManager::getDataSource('default');
		} catch (Exception $connectionError) {
			$connected = false;
		}
		?>
		<p class="alert alert-<?php echo ($connected && $connected->isConnected()) ? 'success' : 'error'; ?>">`
			<?php
			if ($connected && $connected->isConnected()):
				echo '<span class="notice success">';
				echo __d('cake_dev', 'Cake is able to connect to the database.');
				echo '</span>';
			else:
				echo '<span class="notice">';
				echo __d('cake_dev', 'Cake is NOT able to connect to the database.');
				echo '<br /><br />';
				echo $connectionError->getMessage();
				echo '</span>';
			endif;
			?>
		</p>
	<?php endif; ?>
	<?php
	App::uses('Validation', 'Utility');
	if (!Validation::alphaNumeric('cakephp')) {
		echo '<p><span class="notice">';
		echo __d('cake_dev', 'PCRE has not been compiled with Unicode support.');
		echo '<br/>';
		echo __d('cake_dev', 'Recompile PCRE with Unicode support by adding <code>--enable-unicode-properties</code> when configuring');
		echo '</span></p>';
	}
	?>
</section>