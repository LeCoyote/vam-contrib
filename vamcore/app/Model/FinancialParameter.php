<?php
App::uses('AppModel', 'Model');
/**
 * FinancialParameter Model
 *
 * @property Fleettype $Fleettype
 */
class FinancialParameter extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'financial_parameter';

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Fleettype' => array(
			'className' => 'Fleettype',
			'joinTable' => 'fleettypes_finparams',
			'foreignKey' => 'finparam_id',
			'associationForeignKey' => 'fleettype_id',
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
