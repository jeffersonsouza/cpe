<?php
App::uses('AppModel', 'Model');
/**
 * ClientesPremio Model
 *
 * @property Cliente $Cliente
 * @property Premio $Premio
 */
class ClientesPremio extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Premio' => array(
			'className' => 'Premio',
			'foreignKey' => 'premio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
