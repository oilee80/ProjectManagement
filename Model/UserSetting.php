<?php
App::uses('AppModel', 'Model');
/**
 * UserSetting Model
 *
 * @property Setting $Setting
 */
class UserSetting extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'user_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'setting_id' => array(
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
		'DefaultSetting' => array(
			'className' => 'DefaultSetting',
			'foreignKey' => 'setting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
