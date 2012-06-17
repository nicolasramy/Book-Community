<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;

class BooksController extends \lithium\action\Controller {

	public function index() {
		return $this->render(array('layout' => false));
	}
}

?>
