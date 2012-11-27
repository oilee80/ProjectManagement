<?php
App::uses('DefaultActivity', 'Model');

/**
 * DefaultActivity Test Case
 *
 */
class DefaultActivityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.default_activity');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DefaultActivity = ClassRegistry::init('DefaultActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DefaultActivity);

		parent::tearDown();
	}

}
