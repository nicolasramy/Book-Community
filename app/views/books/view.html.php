<header>
	<h2>Books</h2>
	<?php echo $this->html->link('Go back to Books index', array('Books::index')); ?>
</header>

<h3><?php echo $book->name; ?></h3>
<h4>From <?php echo $this->html->link($book->author->firstname . ' ' . $book->author->lastname, array('Authors::view', 'id' => $book->author->id)) ?></h4>
<p>
	<strong>Published <?php echo $book->published?></strong><br />
	<?php echo $book->description; ?>
</p>

<footer></footer>


