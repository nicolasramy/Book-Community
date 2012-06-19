<?php

use lithium\security\Auth;

Auth::config(array(
	'default' => array(
		'adapter' => 'Form',
		'model' => 'Authors',
		'fields' => array('email', 'password')
	)
));

?>
