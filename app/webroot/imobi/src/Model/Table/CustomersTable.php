<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\Event\Event;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Registers
 * @property \Cake\ORM\Association\BelongsTo $CustomerTypes
 * @property \Cake\ORM\Association\BelongsToMany $Addresses
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomersTable extends Table
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

        $this->addBehavior('Secure');

        $this->table('customers');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Registers', [
            'foreignKey' => 'register_id',
            'joinType' => 'INNER'
            ]);
        // $this->belongsTo('CustomerTypes', [
        //     'foreignKey' => 'customer_type_id',
        //     'joinType' => 'INNER'
        //     ]);
        $this->belongsToMany('Addresses', [
            'foreignKey' => 'customer_id',
            'targetForeignKey' => 'address_id',
            'joinTable' => 'customers_addresses'
            ]);
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
        ->notEmpty('name', __('Este campo é obrigatório'));

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
        $rules->add($rules->existsIn(['register_id'], 'Registers'));
        //$rules->add($rules->existsIn(['customer_type_id'], 'CustomerTypes'));

        return $rules;
    }

    public function beforeSave(Event $event)
    {
        // retira mascara do cpf
        $event->data['entity']->cpf_cnpj = str_replace(array('.', '-', '/'), '', $event->data['entity']->cpf_cnpj);
        return $event;
    }
}
