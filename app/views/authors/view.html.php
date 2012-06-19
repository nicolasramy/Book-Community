<header>
	<h2>Authors</h2>
	<?php echo $this->html->link('Go back to Authors index', array('Authors::index')); ?>
</header>

<h3><?php echo $author->firstname; ?>&nbsp;<?php echo $author->lastname; ?></h3>
<dl>
	<dt>Email :</dt>
	<dd><?php echo $author->email; ?></dd>
	<dt>Date of Birth :</dt>
	<dd><?php echo $author->date_of_birth; ?></dd>
</dl>
<h4>Books</h4>
<?php if (!empty($author->books)) : ?>
	<ul>
	<?php foreach ($author->books as $book) : ?>
		<li><?php echo $this->html->link($book->name, array('Books::view', 'id' => $book->id)); ?></li>
	<?php endforeach; ?>
	</ul>
<?php else : ?>
	<p>No books available</p>
<?php endif; ?>

<footer></footer>
