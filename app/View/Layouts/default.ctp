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

		echo $this->Html->css(array('bootstrap', 'bootstrap-responsive', 'prettify'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="container">
			<header>
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container">
							<?php echo $this->Html->link('Your Application', array('controller' => 'pages', 'action' => 'home'), array('class' => 'brand')); ?>
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="active">
										<a href="http://github.com/jeffersonsouza/cakeapp-twitter-bootstrap">Project Github</a>
									</li>
									<li class="divider-vertical"></li>
									<li class="">
										<a href="http://jeffersonsouza.com.br">About the Author</a>
									</li>
									<li class="">
										<?php echo $this->Html->link('@jeffersonsouza', array('http://twitter.com/jeffersonsouza')); ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section>
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</section>
		</div>
		<?php echo $this->Html->script(array('jquery-1.7.2.min', 'bootstrap.min', 'application','default')); ?>
	</body>
</html>