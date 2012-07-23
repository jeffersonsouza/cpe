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

		echo $this->Html->css(array('bootstrap', 'bootstrap-responsive', 'prettify', 'default'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		?>
	</head>
	<body>
		<div id="container">
			<header>
				
			</header>
			<section>
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</section>
		</div>
		<?php
		echo $this->Html->script(array('jquery-1.7.2.min', 'bootstrap.min', 'application', 'jquery.meio.mask.min','default'));
		echo $this->fetch('script');
		?>
	</body>
</html>