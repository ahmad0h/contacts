<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Person Model
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonTable extends Table
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

        $this->setTable('person');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
		
		$this->hasMany('Address', [
            'foreignKey' => 'person_id'
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
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name')
			->add('first_name', [
				'length' => [
					'rule' => ['minLength', 4],
					'message' => 'Fisrt name need to be at least 4 characters long',
				],
				'pattern'=>[
					 'rule'      => ['custom','/^([a-zA-Z]*)$/i'],
					 'message'   => 'Only letters allowed',
				]
			]);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')			
			->add('last_name', [
				'length' => [
					'rule' => ['minLength', 4],
					'message' => 'last name need to be at least 4 characters long',
				],
				'pattern'=>[
					 'rule'      => ['custom','/^([a-zA-Z]*)$/i'],
					 'message'   => 'Only letters allowed',
				]
			]);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
			->add('email', [
				'length' => [
					'rule' => ['minLength', 11],
					'message' => 'email need to be at least 11 characters long',
				]
			]);

        $validator
            ->scalar('phone')
            ->maxLength('phone', 50)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone')
			->add('phone',[
			'pattern'=>[
					 'rule' => ['custom', '/^(\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*(\d{1,2})$)$/i'],
					'message' => 'Please enter a valid international phone number ie(+1-234-567-8901).'
				] ]);

        $validator
            ->date('DOB')
            ->requirePresence('DOB', 'create')
            ->notEmpty('DOB');

        $validator
            ->scalar('PCM')
            ->maxLength('PCM', 10)
            ->requirePresence('PCM', 'create')
            ->notEmpty('PCM');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->scalar('created_by')
            ->allowEmpty('created_by');

        $validator
            ->date('created_on')
            ->allowEmpty('created_on');

        $validator
            ->scalar('modified_by')
            ->allowEmpty('modified_by');

        $validator
            ->date('modified_on')
            ->allowEmpty('modified_on');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
