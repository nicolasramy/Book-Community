<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use \app\models\Authors;

class AuthorsController extends \lithium\action\Controller {

	public function index() {
		$authors = Authors::all();
		return compact('authors');
	}

	public function login() {
	}

	public function logout() {
	}

	public function view() {
		$conditions = array('Authors.id' => $this->request->id);
		$with = array('Books');
		$author = Authors::find('first', compact('conditions', 'with'));
		if (!$author) {
			$this->redirect('Authors::index');
		}
		return compact('author');
	}

	public function add() {

	}

	public function edit($id = null) {
		if (!$id) {
			$this->redirect('Authors::index');
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->redirect('Authors::index');
		}
	}
}

?>
