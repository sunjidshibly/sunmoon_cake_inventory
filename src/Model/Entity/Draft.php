<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Draft Entity
 *
 * @property int $id
 * @property int $sell_no
 * @property string $product_code
 * @property string $product_name
 * @property float $unit_price
 * @property \Cake\I18n\Time $sell_date
 */
class Draft extends Entity
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
