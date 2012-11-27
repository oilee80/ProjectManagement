<?php
App::uses('AppModel', 'Model');
/**
 * UserAttribute Model
 *
 * @property User $User
 */
class UserAttribute extends AppModel {

	public $actsAs = array(
		'type' => array('enum' => array('text', 'select', 'multi select'))
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty')
			),
		),
		'type' => array(
			'notempty' => array(
				'rule' => array('notempty')
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'users_user_attributes',
			'foreignKey' => 'user_attribute_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
