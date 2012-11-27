<?php
App::uses('AppController', 'Controller');
/**
 * ProjectActivities Controller
 *
 * @property ProjectActivity $ProjectActivity
 */
class ProjectActivitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectActivity->recursive = 0;
		$this->set('projectActivities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProjectActivity->id = $id;
		if (!$this->ProjectActivity->exists()) {
			throw new NotFoundException(__('Invalid project activity'));
		}
		$this->set('projectActivity', $this->ProjectActivity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectActivity->create();
			if ($this->ProjectActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The project activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project activity could not be saved. Please, try again.'));
			}
		}
		$activities = $this->ProjectActivity->Activity->find('list');
		$users = $this->ProjectActivity->User->find('list');
		$projects = $this->ProjectActivity->Project->find('list');
		$this->set(compact('activities', 'users', 'projects'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ProjectActivity->id = $id;
		if (!$this->ProjectActivity->exists()) {
			throw new NotFoundException(__('Invalid project activity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The project activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project activity could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProjectActivity->read(null, $id);
		}
		$activities = $this->ProjectActivity->Activity->find('list');
		$users = $this->ProjectActivity->User->find('list');
		$projects = $this->ProjectActivity->Project->find('list');
		$this->set(compact('activities', 'users', 'projects'));
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
		$this->ProjectActivity->id = $id;
		if (!$this->ProjectActivity->exists()) {
			throw new NotFoundException(__('Invalid project activity'));
		}
		if ($this->ProjectActivity->delete()) {
			$this->Session->setFlash(__('Project activity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project activity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
