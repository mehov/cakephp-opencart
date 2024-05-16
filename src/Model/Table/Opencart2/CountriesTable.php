<?php
namespace CakePHPOpencart\Model\Table\Opencart2;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @method \CakePHPOpencart\Model\Entity\Country get($primaryKey, $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country newEntity($data = null, array $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country[] newEntities(array $data, array $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country[] patchEntities($entities, array $data, array $options = [])
 * @method \CakePHPOpencart\Model\Entity\Country findOrCreate($search, callable $callback = null, $options = [])
 */
class CountriesTable extends \CakePHPOpencart\Model\Table\OpencartAbstract\AbstractCountriesTable
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

        $this->setTable('country');
        $this->setDisplayField('name');
        $this->setPrimaryKey('country_id');
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
            ->integer('country_id')
            ->allowEmptyString('country_id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 128)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('iso_code_2')
            ->maxLength('iso_code_2', 2)
            ->requirePresence('iso_code_2', 'create')
            ->notEmptyString('iso_code_2');

        $validator
            ->scalar('iso_code_3')
            ->maxLength('iso_code_3', 3)
            ->requirePresence('iso_code_3', 'create')
            ->notEmptyString('iso_code_3');

        $validator
            ->scalar('address_format')
            ->requirePresence('address_format', 'create')
            ->notEmptyString('address_format');

        $validator
            ->boolean('postcode_required')
            ->requirePresence('postcode_required', 'create')
            ->notEmptyString('postcode_required');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        return $validator;
    }

}
