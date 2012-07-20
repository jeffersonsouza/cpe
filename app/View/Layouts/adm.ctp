<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version       2.1.3
 */
?>

<!DOCTYPE HTML>
<html lang="pt_BR">
	<head>
		<title><?php echo $title_for_layout; ?></title>
		<?php echo $this->Html->charset(); ?>
		<?php
		echo $this->Html->meta('icon', 'ico/favicon');

		echo $this->Html->css(array('bootstrap', 'bootstrap-responsive', 'prettify', 'admin'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		?>
	</head>
	<body>
		<div id="container">
			<header>
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container">
							<?php echo $this->Html->link('Eventos', array('controller' => 'pages', 'action' => 'home'), array('class' => 'brand')); ?>
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="active">
										<?php echo $this->Html->link('Parceiros', array('controller' => 'parceiros', 'action' => 'admin_index')); ?>
									</li>
									<li class="divider-vertical"></li>
									<li class="">
										<?php echo $this->Html->link('Prêmios', array('controller' => 'premios', 'action' => 'admin_index')); ?>
									</li>
									<li class="divider-vertical"></li>
									<li class="">
										<?php echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'admin_index')); ?>
									</li>
								</ul>
							</div>
							<ul class="nav pull-right">
							    <form action="/buscar" method="get" class="navbar-search pull-left">
								<?php echo $this->Form->input('busca', array('class' => 'search-query', 'placeholder' => 'buscar...', 'label' => false)); ?>
							    <?php echo $this->Form->end(); ?>
							    <li class="divider-vertical"></li>
							    <li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Jefferson Souza<?php //echo $user['nome']; ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
								    <li><a href="/usuarios/salvar/<?php //echo $user['id']; ?>">Meus Dados</a></li>
								    <li><a href="/report/bug">Reportar um Bug</a></li>
								    <li class="divider"></li>
								    <li><a href="/admin/logout">Sair</a></li>
								</ul>
							    </li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section class="<?php echo $this->request->params['controller'] . ' ' . $this->request->params['controller'];  ?>">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</section>
		</div>
		<?php echo $this->Html->script(array('jquery-1.7.2.min', 'bootstrap.min', 'application')); ?>
		<?php echo $this->fetch('script'); ?>
	</body>
</html>