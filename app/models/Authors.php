<?php

namespace app\models;

class Authors extends \lithium\data\Model {
	public $hasMany = array('Books');

	public  $validates = array(
		'email' => array(
			array('notEmpty', 'message' => 'You must type a valid email address')
		),
		'password' => array(
			array('notEmpty', 'message' => 'You must type a password')
		)
	);

}

Authors::applyFilter('save', function($self, $params, $chain) {

	if (!$params['entity']->id && !empty($params['entity']->password)) {
		$params['entity']->password = \lithium\util\String::hash($params['entity']->password);
	}

	return $chain->next($self, $params, $chain);
});


?>
