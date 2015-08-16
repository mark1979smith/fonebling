<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 10:05 PM
 */

namespace Application\Model\Product;

/**
 * Class Attributes
 * Determines the attributes for the product variant and type
 * Note: Type has been added to avoid data pollution with bundle products, ie a yellow screen protector
 * when the case is yellow in the bundle. Screen protectors do not have a colour.
 * @package Application\Model\Product
 */
class Attributes
{
    public $variant_id;
    public $product_type_id;
    public $attribute_label_id;
    public $attribute_value_id;

    public function exchangeArray($data)
    {
        $this->variant_id           = (!empty($data['variant_id'])) ? $data['variant_id'] : null;
        $this->product_type_id      = (!empty($data['product_type_id'])) ? $data['product_type_id'] : null;
        $this->attribute_label_id   = (!empty($data['attribute_label_id'])) ? $data['attribute_label_id'] : null;
        $this->attribute_value_id   = (!empty($data['attribute_value_id'])) ? $data['attribute_value_id'] : null;
    }
}