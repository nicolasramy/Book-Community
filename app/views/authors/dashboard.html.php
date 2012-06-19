<header>
	<h2>Dashboard</h2>

	<?php echo $this->_render('element', 'subnav'); ?>
</header>


<?php if (!empty($books)) : ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>published</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($books as $book) : ?>
		<tr>
			<td class="ids"><?php echo $book->id; ?></td>
			<td><?php echo $book->name; ?></td>
			<td class="date"><?php echo $book->published; ?></td>
			<td class="actions">
				<?php echo $this->html->link('View', array('Books::view', 'id' => $book->id)); ?>
				<?php echo $this->html->link('Edit', array('Books::edit', 'id' => $book->id)); ?>
				<?php echo $this->html->link('Delete', array('Books::delete', 'id' => $book->id)); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>

	</table>
<?php else : ?>
	<p>No books published</p>
<?php endif; ?>

