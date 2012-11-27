<?php
/**
 * ProjectsProjectAttributeFixture
 *
 */
class ProjectsProjectAttributeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'project_attributes_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'projects_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'value' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('project_attributes_id', 'projects_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'project_attributes_id' => '50b4bfa6-1754-4219-b877-727b05b7adbe',
			'projects_id' => '50b4bfa6-3f2c-4ed1-9316-727b05b7adbe',
			'value' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-11-27 13:27:02',
			'modified' => '2012-11-27 13:27:02'
		),
	);
}
