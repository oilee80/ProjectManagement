<?php
App::uses('ClientAttributesController', 'Controller');

/**
 * TestClientAttributesController *
 */
class TestClientAttributesController extends ClientAttributesController {
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
 * ClientAttributesController Test Case
 *
 */
class ClientAttributesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_attribute', 'app.client', 'app.project', 'app.comment', 'app.project_activity', 'app.activity', 'app.user', 'app.group', 'app.user_setting', 'app.setting', 'app.user_attribute', 'app.users_user_attribute', 'app.project_attribute', 'app.projects_project_attribute', 'app.clients_client_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientAttributes = new TestClientAttributesController();
		$this->ClientAttributes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientAttributes);

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
