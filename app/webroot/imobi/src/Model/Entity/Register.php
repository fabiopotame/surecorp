<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Register Entity
 *
 * @property int $id
 * @property string $code
 * @property \Cake\I18n\Time $validate
 * @property bool $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Office[] $offices
 * @property \App\Model\Entity\User[] $users
 */
class Register extends Entity
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
