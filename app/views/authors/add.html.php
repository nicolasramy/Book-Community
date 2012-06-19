<header>
	<h2>Register</h2>
</header>

<?php
	echo $this->form->create($author);
    echo $this->form->field('firstname');
    echo $this->form->field('lastname');
    echo $this->form->field('date_of_birth');
    echo $this->form->field('email');
	echo $this->form->field('password', array('type' => 'password'));
	echo $this->form->submit('Submit');
	echo $this->form->end();
?>

<footer></footer>
