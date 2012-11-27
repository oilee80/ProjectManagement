<?php
App::uses('AppController', 'Controller');
/**
 * DefaultSettings Controller
 *
 * @property DefaultSetting $DefaultSetting
 */
class DefaultSettingsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DefaultSetting->recursive = 0;
		$this->set('defaultSettings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DefaultSetting->id = $id;
		if (!$this->DefaultSetting->exists()) {
			throw new NotFoundException(__('Invalid default setting'));
		}
		$this->set('defaultSetting', $this->DefaultSetting->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DefaultSetting->create();
			if ($this->DefaultSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The default setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default setting could not be saved. Please, try again.'));
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
		$this->DefaultSetting->id = $id;
		if (!$this->DefaultSetting->exists()) {
			throw new NotFoundException(__('Invalid default setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DefaultSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The default setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default setting could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DefaultSetting->read(null, $id);
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
		$this->DefaultSetting->id = $id;
		if (!$this->DefaultSetting->exists()) {
			throw new NotFoundException(__('Invalid default setting'));
		}
		if ($this->DefaultSetting->delete()) {
			$this->Session->setFlash(__('Default setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Default setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
