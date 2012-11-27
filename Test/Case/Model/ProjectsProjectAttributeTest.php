<?php
App::uses('ProjectsProjectAttribute', 'Model');

/**
 * ProjectsProjectAttribute Test Case
 *
 */
class ProjectsProjectAttributeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.projects_project_attribute', 'app.projects');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectsProjectAttribute = ClassRegistry::init('ProjectsProjectAttribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsProjectAttribute);

		parent::tearDown();
	}

}
