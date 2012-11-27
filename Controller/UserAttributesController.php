<?php
App::uses('AppController', 'Controller');
/**
 * UserAttributes Controller
 *
 * @property UserAttribute $UserAttribute
 */
class UserAttributesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserAttribute->recursive = 0;
		$this->set('userAttributes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserAttribute->id = $id;
		if (!$this->UserAttribute->exists()) {
			throw new NotFoundException(__('Invalid user attribute'));
		}
		$this->set('userAttribute', $this->UserAttribute->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserAttribute->create();
			if ($this->UserAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The user attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user attribute could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserAttribute->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UserAttribute->id = $id;
		if (!$this->UserAttribute->exists()) {
			throw new NotFoundException(__('Invalid user attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The user attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserAttribute->read(null, $id);
		}
		$users = $this->UserAttribute->User->find('list');
		$this->set(compact('users'));
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
		$this->UserAttribute->id = $id;
		if (!$this->UserAttribute->exists()) {
			throw new NotFoundException(__('Invalid user attribute'));
		}
		if ($this->UserAttribute->delete()) {
			$this->Session->setFlash(__('User attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
