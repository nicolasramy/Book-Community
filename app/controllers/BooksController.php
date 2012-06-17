<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\controllers;
use \app\models\Book;

class BooksController extends \lithium\action\Controller {

	public function index() {
		$books = Book::all();
		return compact('books');
	}

	public function view($id = null) {
		if (!$id) {
			$this->redirect('Books::index');
		}
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
