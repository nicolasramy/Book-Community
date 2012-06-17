<h2>Books</h2>

<h3><?php echo $book->name; ?></h3>
<h4>From <?php echo $this->html->link($book->author->firstname . ' ' . $book->author->lastname, array('Authors::view', 'id' => $book->author->id)) ?></h4>
<p>
	<?php echo $book->description; ?><br />
	Published <?php echo $book->published?>
</p>


