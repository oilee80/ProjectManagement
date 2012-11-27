<?php
App::uses('AppController', 'Controller');
/**
 * ProjectAttributes Controller
 *
 * @property ProjectAttribute $ProjectAttribute
 */
class ProjectAttributesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectAttribute->recursive = 0;
		$this->set('projectAttributes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProjectAttribute->id = $id;
		if (!$this->ProjectAttribute->exists()) {
			throw new NotFoundException(__('Invalid project attribute'));
		}
		$this->set('projectAttribute', $this->ProjectAttribute->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectAttribute->create();
			if ($this->ProjectAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The project attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project attribute could not be saved. Please, try again.'));
			}
		}
		$projects = $this->ProjectAttribute->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProjectAttribute->id = $id;
		if (!$this->ProjectAttribute->exists()) {
			throw new NotFoundException(__('Invalid project attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The project attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProjectAttribute->read(null, $id);
		}
		$projects = $this->ProjectAttribute->Project->find('list');
		$this->set(compact('projects'));
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
		$this->ProjectAttribute->id = $id;
		if (!$this->ProjectAttribute->exists()) {
			throw new NotFoundException(__('Invalid project attribute'));
		}
		if ($this->ProjectAttribute->delete()) {
			$this->Session->setFlash(__('Project attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
