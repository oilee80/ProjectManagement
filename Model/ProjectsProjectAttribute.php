<?php
App::uses('AppModel', 'Model');
/**
 * ProjectsProjectAttribute Model
 *
 * @property Projects $Projects
 */
class ProjectsProjectAttribute extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'project_attributes_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'projects_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'value' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Projects' => array(
			'className' => 'Projects',
			'foreignKey' => 'projects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
