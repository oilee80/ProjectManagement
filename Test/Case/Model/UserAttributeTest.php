<?php
App::uses('UserAttribute', 'Model');

/**
 * UserAttribute Test Case
 *
 */
class UserAttributeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_attribute', 'app.user', 'app.group', 'app.type', 'app.project_activity', 'app.activity', 'app.project', 'app.client', 'app.client_attribute', 'app.clients_client_attribute', 'app.comment', 'app.project_attribute', 'app.projects_project_attribute', 'app.user_setting', 'app.setting', 'app.users_user_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserAttribute = ClassRegistry::init('UserAttribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserAttribute);

		parent::tearDown();
	}

}
