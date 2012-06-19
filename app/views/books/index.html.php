<header>
	<h2>Books</h2>
</header>

<?php if (!empty($books)) : ?>
	<?php foreach ($books as $book) : ?>
	<h3><?php echo $this->html->link($book->name, array('Books::view', 'id' => $book->id)); ?></h3>
	<h4>From <?php echo $this->html->link($book->author->firstname . ' ' . $book->author->lastname, array('Authors::view', 'id' => $book->author->id)) ?></h4>
	<p>
		Published <?php echo $book->published?><br />
		<?php echo $this->html->link('Read more ...', array('Books::view', 'id' => $book->id)); ?>
	</p>
	<?php endforeach; ?>
<?php else : ?>
	<p>No books are available</p>
<?php endif; ?>

<footer></footer>
