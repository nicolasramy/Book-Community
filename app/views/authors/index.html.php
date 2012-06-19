<header>
	<h2>Authors</h2>
</header>

<?php if (!empty($authors)) : ?>
	<?php foreach ($authors as $author) : ?>
		<h3><?php echo $this->html->link($author->firstname . ' '. $author->lastname, array('authors::view', 'id' => $author->id)) ?></h3>
		<p>Published <?php echo count($author->books); ?> books</p>
	<?php endforeach; ?>
<?php else : ?>
	<p>No authors available</p>
<?php endif; ?>

<footer></footer>
