<?php
App::uses('AppController', 'Controller');
/**
 * ProjectsProjectAttributes Controller
 *
 * @property ProjectsProjectAttribute $ProjectsProjectAttribute
 */
class ProjectsProjectAttributesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProjectsProjectAttribute->recursive = 0;
		$this->set('projectsProjectAttributes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProjectsProjectAttribute->id = $id;
		if (!$this->ProjectsProjectAttribute->exists()) {
			throw new NotFoundException(__('Invalid projects project attribute'));
		}
		$this->set('projectsProjectAttribute', $this->ProjectsProjectAttribute->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProjectsProjectAttribute->create();
			if ($this->ProjectsProjectAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The projects project attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projects project attribute could not be saved. Please, try again.'));
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
		$this->ProjectsProjectAttribute->id = $id;
		if (!$this->ProjectsProjectAttribute->exists()) {
			throw new NotFoundException(__('Invalid projects project attribute'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProjectsProjectAttribute->save($this->request->data)) {
				$this->Session->setFlash(__('The projects project attribute has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projects project attribute could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProjectsProjectAttribute->read(null, $id);
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
		$this->ProjectsProjectAttribute->id = $id;
		if (!$this->ProjectsProjectAttribute->exists()) {
			throw new NotFoundException(__('Invalid projects project attribute'));
		}
		if ($this->ProjectsProjectAttribute->delete()) {
			$this->Session->setFlash(__('Projects project attribute deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Projects project attribute was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
