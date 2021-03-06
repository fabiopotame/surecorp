<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property int $register_id
 * @property int $customer_type_id
 * @property int $user_last_modified
 * @property string $name
 * @property string $company_name
 * @property string $cpf_cnpj
 * @property string $phone
 * @property string $mobile
 * @property string $email
 * @property bool $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Register $register
 * @property \App\Model\Entity\CustomerType $customer_type
 * @property \App\Model\Entity\Address[] $addresses
 */
class Customer extends Entity
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
        '*' => true,
        'id' => false
    ];
}
