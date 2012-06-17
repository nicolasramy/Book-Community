<h2>Authors</h2>

<?php foreach ($authors as $author) : ?>
<h3><?php echo $this->html->link($author->firstname . '&nbsp;'. $author->lastname, array('authors::view', 'id' => $author->id)) ?></h3>

<?php endforeach; ?>
