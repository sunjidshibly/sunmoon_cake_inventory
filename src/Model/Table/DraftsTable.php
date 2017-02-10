<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Drafts Model
 *
 * @method \App\Model\Entity\Draft get($primaryKey, $options = [])
 * @method \App\Model\Entity\Draft newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Draft[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Draft|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Draft patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Draft[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Draft findOrCreate($search, callable $callback = null, $options = [])
 */
class DraftsTable extends Table
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

        $this->table('drafts');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('sell_no')
            ->requirePresence('sell_no', 'create')
            ->notEmpty('sell_no');

        $validator
            ->requirePresence('product_code', 'create')
            ->notEmpty('product_code');

        $validator
            ->requirePresence('product_name', 'create')
            ->notEmpty('product_name');

        $validator
            ->decimal('unit_price')
            ->requirePresence('unit_price', 'create')
            ->notEmpty('unit_price')
            ->add('unit_price', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->dateTime('sell_date')
            ->allowEmpty('sell_date');

        return $validator;
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
        $rules->add($rules->isUnique(['unit_price']));

        return $rules;
    }
}
