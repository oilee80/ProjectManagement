<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user', 'app.group', 'app.type', 'app.project_activity', 'app.activity', 'app.project', 'app.client', 'app.client_attribute', 'app.clients_client_attribute', 'app.comment', 'app.project_attribute', 'app.projects_project_attribute', 'app.user_setting', 'app.setting', 'app.user_attribute', 'app.users_user_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
