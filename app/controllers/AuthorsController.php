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
 * Use Authors and Books Model
 */
use \app\models\Authors;
use \app\models\Books;

class AuthorsController extends \lithium\action\Controller {

	public function index() {
		// Join Books model to Authors
		$with = array('Books');
		$authors = Authors::find('all', compact('with'));
		return compact('authors');
	}

	public function view() {
		// Join Books model to the current Author
		$with = array('Books');
		$conditions = array('Authors.id' => $this->request->id);
		$author = Authors::find('first', compact('conditions', 'with'));

		// Check Author existence
		if (!$author) {
			$this->redirect('Authors::index');
		}
		return compact('author');
	}

	public function login() {
		if ($this->request->data) {
			// Encrypt password which will be stored in Session
			$this->request->data['password'] = \lithium\util\String::hash($this->request->data['password']);
			$conditions = array(
				'email' => $this->request->data['email'],
				'password' => $this->request->data['password']
			);

			// Retrieve Author
			$author = Authors::find('first', compact('conditions'));

			// Add Author ID to Author authentification Session
			$this->request->data['id'] = $author->id;

			// Check Author existence from request data and create Author authentification Session
			if ($author && Auth::set('default', $this->request)) {
				return $this->redirect('Authors::dashboard');
			}
		}
	}

	public function logout() {
		Auth::clear('default');
		return $this->redirect('Authors::login');
	}

	public function dashboard() {
		// Check Author authentication Session
		if (!Auth::check('default')) {
			return $this->redirect('Authors::login');
		}

		// Retrieve current Author ID
		$author_id = Auth::check('default')->data['id'];

		// Retrieve Books from the current Author
		$conditions = array('Books.author_id' => Auth::check('default')->data['id']);
		$books = Books::find('all', compact('conditions'));
		return compact('books', 'author_id');
	}

	public function add() {
		$author = Authors::create($this->request->data);

		if ($this->request->data && $author->save()) {
			Session::write('message', 'Your author account has been created');
            return $this->redirect('Authors::dashboard');
        } else {
			Session::write('message', 'Your author can not be created');
		}
        return compact('author');
	}

	public function edit() {
		// Check Author authentication Session
		if (!Auth::check('default')) {
			return $this->redirect('Authors::login');
		}

		// Retrieve current Author id
		$author_id = Auth::check('default')->data['id'];

		$author = Authors::find($this->request->id);

		if ($this->request->data) {
			if (strlen($this->request->data['password'])) {
				$this->request->data['password'] = \lithium\util\String::hash($this->request->data['password']);
			} else {
				unset($this->request->data['password']);
			}
			if ($author->save($this->request->data)) {
				Session::write('message', 'Your author account has been edit');
				$this->redirect(array('Authors::dashboard'));
			} else {
				Session::write('message', 'Your author account can not be edited');
			}
		}

		return compact('author', 'author_id');
	}
}

?>

