<?php
App::uses('ProjectActivity', 'Model');

/**
 * ProjectActivity Test Case
 *
 */
class ProjectActivityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.project_activity', 'app.activity', 'app.user', 'app.group', 'app.type', 'app.user_setting', 'app.setting', 'app.user_attribute', 'app.users_user_attribute', 'app.project', 'app.client', 'app.client_attribute', 'app.clients_client_attribute', 'app.comment', 'app.project_attribute', 'app.projects_project_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectActivity = ClassRegistry::init('ProjectActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectActivity);

		parent::tearDown();
	}

}
