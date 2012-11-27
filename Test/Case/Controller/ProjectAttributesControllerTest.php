<?php
App::uses('ProjectAttributesController', 'Controller');

/**
 * TestProjectAttributesController *
 */
class TestProjectAttributesController extends ProjectAttributesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * ProjectAttributesController Test Case
 *
 */
class ProjectAttributesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.project_attribute', 'app.project', 'app.client', 'app.client_attribute', 'app.clients_client_attribute', 'app.comment', 'app.project_activity', 'app.activity', 'app.user', 'app.group', 'app.user_setting', 'app.setting', 'app.user_attribute', 'app.users_user_attribute', 'app.projects_project_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectAttributes = new TestProjectAttributesController();
		$this->ProjectAttributes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectAttributes);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
