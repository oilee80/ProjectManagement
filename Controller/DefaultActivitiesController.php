<?php
App::uses('AppController', 'Controller');
/**
 * DefaultActivities Controller
 *
 * @property DefaultActivity $DefaultActivity
 */
class DefaultActivitiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DefaultActivity->recursive = 0;
		$this->set('defaultActivities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DefaultActivity->id = $id;
		if (!$this->DefaultActivity->exists()) {
			throw new NotFoundException(__('Invalid default activity'));
		}
		$this->set('defaultActivity', $this->DefaultActivity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DefaultActivity->create();
			if ($this->DefaultActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The default activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default activity could not be saved. Please, try again.'));
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
		$this->DefaultActivity->id = $id;
		if (!$this->DefaultActivity->exists()) {
			throw new NotFoundException(__('Invalid default activity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DefaultActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The default activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default activity could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DefaultActivity->read(null, $id);
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
		$this->DefaultActivity->id = $id;
		if (!$this->DefaultActivity->exists()) {
			throw new NotFoundException(__('Invalid default activity'));
		}
		if ($this->DefaultActivity->delete()) {
			$this->Session->setFlash(__('Default activity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Default activity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
