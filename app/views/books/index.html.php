<h2>Books</h2>

<?php foreach ($books as $book) : ?>
<h3><?php echo $this->html->link($book->name, array('Books::view', 'id' => $book->id)) ?></h3>
<h4>From <?php $this->html->link($book->author_id, array('Authors::view', 'id' => $book->author_id)) ?></h4>
<p>
	<?php echo $book->description; ?><br />
	<?php echo $this->html->link('Read more ...', array('Books::view', 'id' => $book->id)); ?>
</p>
<p><?php echo $book->description; ?> <?php echo $book->description; ?></p>
<?php endforeach; ?>
