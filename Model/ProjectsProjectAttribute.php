<?php
App::uses('AppModel', 'Model');
/**
 * ProjectsProjectAttribute Model
 *
 * @property ProjectAttributes $ProjectAttributes
 * @property Projects $Projects
 */
class ProjectsProjectAttribute extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'project_attributes_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'ProjectAttributes' => array(
			'className' => 'ProjectAttributes',
			'foreignKey' => 'project_attributes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Projects' => array(
			'className' => 'Projects',
			'foreignKey' => 'projects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
