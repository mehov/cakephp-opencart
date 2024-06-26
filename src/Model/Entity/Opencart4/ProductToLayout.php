<?php
namespace CakePHPOpencart\Model\Entity\Opencart4;

/**
 * ProductToLayout Entity
 *
 * @property int $product_id
 * @property int $store_id
 * @property int $layout_id
 *
 * @property \CakePHPOpencart\Model\Entity\Opencart4\Product $product
 * @property \CakePHPOpencart\Model\Entity\Opencart4\Store $store
 * @property \CakePHPOpencart\Model\Entity\Opencart4\Layout $layout
 */
class ProductToLayout extends \CakePHPOpencart\Model\Entity\OpencartAbstract\AbstractProductToLayout
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
        'product' => true,
        'store' => true,
        'layout' => true,
    ];
}
