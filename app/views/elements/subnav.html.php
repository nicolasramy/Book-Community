<div class="subnav">
	<ul class="nav nav-pills">
		<li><?php echo $this->html->link('Add a book', array('Books::add')); ?></li>
		<li><?php echo $this->html->link('Edit account', array('Authors::edit', 'id' => $author_id)); ?></li>
	</ul>
</div>
