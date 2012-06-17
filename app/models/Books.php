<?php

namespace app\models;

class Books extends \lithium\data\Model {
	public $belongsTo = array(
		'Authors' => array(
			'class'	=> 'Authors',
			'key'	=> 'author_id'
		)
	);
}

?>
