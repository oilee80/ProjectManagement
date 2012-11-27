<?php
/**
 * UsersUserAttributeFixture
 *
 */
class UsersUserAttributeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_attributes_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'users_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'value' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('user_attributes_id', 'users_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'user_attributes_id' => '50b4bfa7-67e8-450d-b44e-727b05b7adbe',
			'users_id' => '50b4bfa7-7bd4-42af-a856-727b05b7adbe',
			'value' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-11-27 13:27:03',
			'modified' => '2012-11-27 13:27:03'
		),
	);
}
