<?php

namespace app\models;

class Authors extends \lithium\data\Model {
	public $hasMany = array('Books');
}

?>
