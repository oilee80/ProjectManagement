<?php
App::uses('AppController', 'Controller');
/**
 * ClientsClientAttributes Controller
 *
 * @property ClientsClientAttribute $ClientsClientAttribute
 */
class ClientsClientAttributesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientsClientAttribute->recursive = 0;
		$this->set('clientsClientAttributes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientsClientAttribute->id = $id;
		if (!$this->ClientsClientAttribute->exists()) {
			throw new NotFoundException(__('Invalid clients client attribute'));
		}
		$this->set('clientsClientAttribute', $this->ClientsClientAttribute->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientsClientAttribute->create();
			if ($this->ClientsClientAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The clients client attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients client attribute could not be saved. Please, try again.'));
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
		$this->ClientsClientAttribute->id = $id;
		if (!$this->ClientsClientAttribute->exists()) {
			throw new NotFoundException(__('Invalid clients client attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientsClientAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The clients client attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clients client attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientsClientAttribute->read(null, $id);
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
		$this->ClientsClientAttribute->id = $id;
		if (!$this->ClientsClientAttribute->exists()) {
			throw new NotFoundException(__('Invalid clients client attribute'));
		}
		if ($this->ClientsClientAttribute->delete()) {
			$this->Session->setFlash(__('Clients client attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clients client attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
