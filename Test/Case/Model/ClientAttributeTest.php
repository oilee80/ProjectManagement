<?php
App::uses('ClientAttribute', 'Model');

/**
 * ClientAttribute Test Case
 *
 */
class ClientAttributeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_attribute', 'app.client', 'app.project', 'app.comment', 'app.project_activity', 'app.activity', 'app.user', 'app.group', 'app.type', 'app.user_setting', 'app.setting', 'app.user_attribute', 'app.users_user_attribute', 'app.project_attribute', 'app.projects_project_attribute', 'app.clients_client_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientAttribute = ClassRegistry::init('ClientAttribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientAttribute);

		parent::tearDown();
	}

}
