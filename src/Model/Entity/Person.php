<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property \Cake\I18n\FrozenDate $DOB
 * @property string $PCM
 * @property string $gender
 * @property string $created_by
 * @property \Cake\I18n\FrozenDate $created_on
 * @property string $modified_by
 * @property \Cake\I18n\FrozenDate $modified_on
 */
class Person extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone' => true,
        'DOB' => true,
        'PCM' => true,
        'gender' => true,
        'created_by' => true,
        'created_on' => true,
        'modified_by' => true,
        'modified_on' => true
    ];
}
