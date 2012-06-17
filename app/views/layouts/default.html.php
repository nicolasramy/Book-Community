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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Community &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('bootstrap.min', 'bootstrap-responsive.min', 'style')); ?>
	<?php echo $this->html->script(array('jquery-1.7.2.min', 'bootstrap.min')); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body id="top">

	<?php echo $this->_render('element', 'navbar'); ?>

	<div class="container">
		<?php echo $this->content(); ?>
	</div>

	<?php echo $this->html->script(array('jquery.ui.totop', 'bootstrap-alert')); ?>

</body>
</html>
