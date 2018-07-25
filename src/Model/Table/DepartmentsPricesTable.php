<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DepartmentsPrices Model
 *
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\PricesTable|\Cake\ORM\Association\BelongsTo $Prices
 *
 * @method \App\Model\Entity\DepartmentsPrice get($primaryKey, $options = [])
 * @method \App\Model\Entity\DepartmentsPrice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DepartmentsPrice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DepartmentsPrice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DepartmentsPrice|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DepartmentsPrice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DepartmentsPrice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DepartmentsPrice findOrCreate($search, callable $callback = null, $options = [])
 */
class DepartmentsPricesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('departments_prices');
        $this->setDisplayField('department_id');
        $this->setPrimaryKey(['department_id', 'price_id']);

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Prices', [
            'foreignKey' => 'price_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['price_id'], 'Prices'));

        return $rules;
    }
}
