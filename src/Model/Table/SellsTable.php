<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sells Model
 *
 * @method \App\Model\Entity\Sell get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sell newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sell[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sell|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sell patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sell[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sell findOrCreate($search, callable $callback = null, $options = [])
 */
class SellsTable extends Table
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

        $this->table('sells');
        $this->displayField('ID');
        $this->primaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->requirePresence('sell_code', 'create')
            ->notEmpty('sell_code');

        $validator
            ->requirePresence('product_code', 'create')
            ->notEmpty('product_code');

        $validator
            ->requirePresence('product_name', 'create')
            ->notEmpty('product_name');

        $validator
            ->integer('sell_quantity')
            ->requirePresence('sell_quantity', 'create')
            ->notEmpty('sell_quantity');

        $validator
            ->decimal('unit_price')
            ->requirePresence('unit_price', 'create')
            ->notEmpty('unit_price');

       

        return $validator;
    }
}
