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
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('debug', 'lithium')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body id="top">
	<div id="container">
		<header>
			<h1>Book Community</h1>
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
