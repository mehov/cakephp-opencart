<?php
namespace CakePHPOpencart\Model\Entity\Opencart2;

/**
 * CategoryToLayout Entity
 *
 * @property int $category_id
 * @property int $store_id
 * @property int $layout_id
 *
 * @property \CakePHPOpencart\Model\Entity\Opencart2\Category $category
 * @property \CakePHPOpencart\Model\Entity\Opencart2\Store $store
 * @property \CakePHPOpencart\Model\Entity\Opencart2\Layout $layout
 */
class CategoryToLayout extends \CakePHPOpencart\Model\Entity\OpencartAbstract\AbstractCategoryToLayout
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
        'layout_id' => true,
        'category' => true,
        'store' => true,
        'layout' => true,
    ];
}
