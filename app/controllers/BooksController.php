<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
namespace app\controllers;


/**
 * Use Auth and Session
 */
use lithium\security\Auth;
use lithium\storage\Session;


/**
 * Use Books Model
 */
use \app\models\Books;


class BooksController extends \lithium\action\Controller {

	public function index() {
		//Join Authors model to Books
		$with = array('Authors');
		$books = Books::find('all', compact('with'));
		return compact('books');
	}

	public function view() {
		// Join Authors model to the current Book
		$with = array('Authors');
		$conditions = array('Books.id' => $this->request->id);
		$book = Books::find('first', compact('conditions', 'with'));

		// Check Book existence
		if (!$book) {
			return $this->redirect('Books::index');
		}
		return compact('book');
	}

	public function add() {
		// Check Author authentication Session
		if (!Auth::check('default')) {
			return $this->redirect('Authors::login');
		}

		// Retrieve current Author ID
		$author_id = Auth::check('default')->data['id'];

		$book = Books::create();

		if ($book && $this->request->data && $book->save($this->request->data)) {
			Session::write('message', 'Book has been created');
			$this->redirect(array('Authors::dashboard'));
		} else {
			Session::write('message', 'Book can not been created');
		}
		return compact('author_id', 'book');
	}


	public function edit() {
		// Check Author authentication Session
		if (!Auth::check('default')) {
			return $this->redirect('Authors::login');
		}

		// Retrieve current Author ID
		$author_id = Auth::check('default')->data['id'];

		$book = Books::find($this->request->id);

		if ($book && $this->request->data && $book->save($this->request->data)) {
			Session::write('message', 'Book has been edited');
			$this->redirect(array('Authors::dashboard'));
		} else {
			Session::write('message', 'Book can not be edited');
		}
		return compact('book', 'author_id');
	}


	public function delete() {
		// Check Author authentication Session
		if (!Auth::check('default')) {
			return $this->redirect('Authors::login');
		}

		$book = Books::find($this->request->id);

		if ($book && $book->delete()) {
			Session::write('message', 'Book deleted');
			$this->redirect(array('Authors::dashboard'));
		} else {
			Session::write('message', 'Book can not be deleted');
		}
	}
}

?>
