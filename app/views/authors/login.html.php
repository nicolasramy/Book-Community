<header>
	<h2>Login</h2>
</header>

<?php
	echo $this->form->create(null);
    echo $this->form->field('email');
	echo $this->form->field('password', array('type' => 'password'));
	echo $this->form->submit('Login');
	echo $this->form->end();
?>

<footer></footer>
