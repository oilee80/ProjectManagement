<?php
App::uses('AppController', 'Controller');
/**
 * UsersUserAttributes Controller
 *
 * @property UsersUserAttribute $UsersUserAttribute
 */
class UsersUserAttributesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UsersUserAttribute->recursive = 0;
		$this->set('usersUserAttributes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UsersUserAttribute->id = $id;
		if (!$this->UsersUserAttribute->exists()) {
			throw new NotFoundException(__('Invalid users user attribute'));
		}
		$this->set('usersUserAttribute', $this->UsersUserAttribute->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersUserAttribute->create();
			if ($this->UsersUserAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The users user attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users user attribute could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UsersUserAttribute->id = $id;
		if (!$this->UsersUserAttribute->exists()) {
			throw new NotFoundException(__('Invalid users user attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UsersUserAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The users user attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users user attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UsersUserAttribute->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->UsersUserAttribute->id = $id;
		if (!$this->UsersUserAttribute->exists()) {
			throw new NotFoundException(__('Invalid users user attribute'));
		}
		if ($this->UsersUserAttribute->delete()) {
			$this->Session->setFlash(__('Users user attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Users user attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
