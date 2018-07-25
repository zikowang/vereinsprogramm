<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property string $optname
 * @property string $street
 * @property int $houseno
 * @property int $zipcode
 * @property string $city
 * @property int $country_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\User[] $users
 */
class Address extends Entity
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
        'optname' => true,
        'street' => true,
        'houseno' => true,
        'zipcode' => true,
        'city' => true,
        'country_id' => true,
        'created' => true,
        'modified' => true,
        'country' => true,
        'users' => true
    ];
}
