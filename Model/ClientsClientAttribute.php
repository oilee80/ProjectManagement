<?php
App::uses('AppModel', 'Model');
/**
 * ClientsClientAttribute Model
 *
 * @property ClientAttributes $ClientAttributes
 * @property Clients $Clients
 */
class ClientsClientAttribute extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'client_attributes_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'clients_id' => array(
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
		'ClientAttributes' => array(
			'className' => 'ClientAttributes',
			'foreignKey' => 'client_attributes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Clients' => array(
			'className' => 'Clients',
			'foreignKey' => 'clients_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
