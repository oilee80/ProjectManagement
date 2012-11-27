<?php
App::uses('AppController', 'Controller');
/**
 * ClientAttributes Controller
 *
 * @property ClientAttribute $ClientAttribute
 */
class ClientAttributesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientAttribute->recursive = 0;
		$this->set('clientAttributes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientAttribute->id = $id;
		if (!$this->ClientAttribute->exists()) {
			throw new NotFoundException(__('Invalid client attribute'));
		}
		$this->set('clientAttribute', $this->ClientAttribute->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientAttribute->create();
			if ($this->ClientAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The client attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client attribute could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientAttribute->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientAttribute->id = $id;
		if (!$this->ClientAttribute->exists()) {
			throw new NotFoundException(__('Invalid client attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The client attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientAttribute->read(null, $id);
		}
		$clients = $this->ClientAttribute->Client->find('list');
		$this->set(compact('clients'));
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
		$this->ClientAttribute->id = $id;
		if (!$this->ClientAttribute->exists()) {
			throw new NotFoundException(__('Invalid client attribute'));
		}
		if ($this->ClientAttribute->delete()) {
			$this->Session->setFlash(__('Client attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
