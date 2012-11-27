<?php
App::uses('UsersUserAttribute', 'Model');

/**
 * UsersUserAttribute Test Case
 *
 */
class UsersUserAttributeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.users_user_attribute', 'app.users');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersUserAttribute = ClassRegistry::init('UsersUserAttribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersUserAttribute);

		parent::tearDown();
	}

}
