<?php
namespace Newsletter\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $email
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $first_name
 * @property string $last_name
 * @property string $locale
 * @property \Newsletter\Model\Entity\Log[] $logs
 * @property \Newsletter\Model\Entity\MailingList[] $mailing_lists
 */
class User extends Entity
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
        'id' => false,
    ];

    protected function _getFullNameEmail()
    {
        return $this->first_name . ' ' . $this->last_name . ' <' . $this->email . '>';
    }
}
