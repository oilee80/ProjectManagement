<?php
App::uses('AppController', 'Controller');
/**
 * ProjectTimes Controller
 *
 * @property ProjectTime $ProjectTime
 */
class ProjectTimesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectTime->recursive = 0;
		$this->set('projectTimes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProjectTime->id = $id;
		if (!$this->ProjectTime->exists()) {
			throw new NotFoundException(__('Invalid project time'));
		}
		$this->set('projectTime', $this->ProjectTime->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectTime->create();
			if ($this->ProjectTime->save($this->request->data)) {
				$this->Session->setFlash(__('The project time has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project time could not be saved. Please, try again.'));
			}
		}
		$users = $this->ProjectTime->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProjectTime->id = $id;
		if (!$this->ProjectTime->exists()) {
			throw new NotFoundException(__('Invalid project time'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectTime->save($this->request->data)) {
				$this->Session->setFlash(__('The project time has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project time could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProjectTime->read(null, $id);
		}
		$users = $this->ProjectTime->User->find('list');
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
		$this->ProjectTime->id = $id;
		if (!$this->ProjectTime->exists()) {
			throw new NotFoundException(__('Invalid project time'));
		}
		if ($this->ProjectTime->delete()) {
			$this->Session->setFlash(__('Project time deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project time was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
