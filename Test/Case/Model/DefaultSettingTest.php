<?php
App::uses('DefaultSetting', 'Model');

/**
 * DefaultSetting Test Case
 *
 */
class DefaultSettingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.default_setting');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DefaultSetting = ClassRegistry::init('DefaultSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DefaultSetting);

		parent::tearDown();
	}

}
