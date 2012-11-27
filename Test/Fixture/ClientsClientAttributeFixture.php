<?php
/**
 * ClientsClientAttributeFixture
 *
 */
class ClientsClientAttributeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'client_attributes_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'clients_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'value' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('client_attributes_id', 'clients_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'client_attributes_id' => '50b4bfa3-40c0-4895-9581-727b05b7adbe',
			'clients_id' => '50b4bfa3-6960-4f3a-bd1a-727b05b7adbe',
			'value' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-11-27 13:26:59',
			'modified' => '2012-11-27 13:26:59'
		),
	);
}
