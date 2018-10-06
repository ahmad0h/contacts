<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity
 *
 * @property int $id
 * @property string $name
 * @property string $floor
 * @property string $building
 * @property string $street
 * @property string $city
 * @property string $regoin
 * @property string $country
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created_on
 * @property string $modified_by
 * @property \Cake\I18n\FrozenDate $modified_on
 * @property int $person_id
 *
 * @property \App\Model\Entity\Person $person
 */
class Addres extends Entity
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
        'name' => true,
        'floor' => true,
        'building' => true,
        'street' => true,
        'city' => true,
        'regoin' => true,
        'country' => true,
        'created_by' => true,
        'created_on' => true,
        'modified_by' => true,
        'modified_on' => true,
        'person_id' => true,
        'person' => true
    ];
}
