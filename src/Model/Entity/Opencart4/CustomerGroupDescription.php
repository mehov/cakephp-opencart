<?php
namespace CakePHPOpencart\Model\Entity\Opencart4;

/**
 * CustomerGroupDescription Entity
 *
 * @property int $customer_group_id
 * @property int $language_id
 * @property string $name
 * @property string $description
 *
 * @property \CakePHPOpencart\Model\Entity\Opencart4\CustomerGroup $customer_group
 * @property \CakePHPOpencart\Model\Entity\Opencart4\Language $language
 */
class CustomerGroupDescription extends \CakePHPOpencart\Model\Entity\OpencartAbstract\AbstractCustomerGroupDescription
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
        'description' => true,
        'customer_group' => true,
        'language' => true,
    ];
}
