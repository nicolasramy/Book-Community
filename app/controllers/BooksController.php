<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use \app\models\Books;
use \app\models\Authors;

class BooksController extends \lithium\action\Controller {

	public function index() {
		$books = Books::find('all', array('with' => 'Authors'));
		return compact('books');
	}

	public function view() {
		$book = Books::first($this->request->id);
		if (!$book) {
			$this->redirect('Books::index');
		}
		return compact('book');
	}

	public function add() {

	}

	public function edit($id = null) {
		if (!$id) {
			$this->redirect('Books::index');
		}
	}

	public function delete($id = null) {
		if (!$id) {
			$this->redirect('Books::index');
		}
	}
}

?>
