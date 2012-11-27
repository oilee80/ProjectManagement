<?php
/**
 * DefaultActivityFixture
 *
 */
class DefaultActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'time' => array('type' => 'time', 'null' => false, 'default' => NULL),
		'billable' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'billable' => array('column' => 'billable', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '50b4bfa3-fbb4-4568-a28f-727b05b7adbe',
			'name' => 'Lorem ipsum dolor sit amet',
			'time' => '13:26:59',
			'billable' => 1
		),
	);
}
