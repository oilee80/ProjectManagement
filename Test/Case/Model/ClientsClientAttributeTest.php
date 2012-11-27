<?php
App::uses('ClientsClientAttribute', 'Model');

/**
 * ClientsClientAttribute Test Case
 *
 */
class ClientsClientAttributeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clients_client_attribute', 'app.clients');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientsClientAttribute = ClassRegistry::init('ClientsClientAttribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientsClientAttribute);

		parent::tearDown();
	}

}
