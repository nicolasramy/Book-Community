<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Book Community &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('bootstrap.min', 'bootstrap-responsive.min', 'styles')); ?>
	<?php //echo $this->scripts('jquery-1.7.2.min', 'bootstrap.min', 'jquery.ui.totop', 'bootstrap-alert'); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body id="top">
	<div id="container">
		<header>
			<h1>Book Community</h1>
			<ul>
				<li><?php echo $this->html->link('Books', array('Books::index')); ?></li>
				<li><?php echo $this->html->link('Authors', array('Authors::index')); ?></li>
			</ul>
		</header>
		<div id="content">
			<?php echo $this->content(); ?>
		</div>
		<footer>
			Powered by <?php echo $this->html->link('Lithium', 'http://lithify.me/'); ?>
		</footer>
	</div>
</body>
</html>
