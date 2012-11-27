<?php
App::uses('Comment', 'Model');

/**
 * Comment Test Case
 *
 */
class CommentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.comment', 'app.project', 'app.client', 'app.client_attribute', 'app.clients_client_attribute', 'app.project_activity', 'app.activity', 'app.user', 'app.group', 'app.type', 'app.user_setting', 'app.setting', 'app.user_attribute', 'app.users_user_attribute', 'app.project_attribute', 'app.projects_project_attribute');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comment = ClassRegistry::init('Comment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comment);

		parent::tearDown();
	}

}
