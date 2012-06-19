<header>
	<h2>Add book</h2>

	<?php echo $this->_render('element', 'subnav'); ?>
</header>

<?php
	echo $this->form->create($book);
    echo $this->form->field('author_id', array('type' => 'hidden', 'value' => $author_id));
    echo $this->form->field('name');
    echo $this->form->field('published');
	echo $this->form->submit('Submit');
	echo $this->form->end();
?>

<footer></footer>
