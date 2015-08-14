<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 10:05 PM
 */

namespace Application\Model\Product;

class Attributes
{
    public $variant_id;
    public $attribute_label_id;
    public $attribute_value_id;

    public function exchangeArray($data)
    {
        $this->variant_id           = (!empty($data['variant_id'])) ? $data['variant_id'] : null;
        $this->attribute_label_id   = (!empty($data['attribute_label_id'])) ? $data['attribute_label_id'] : null;
        $this->attribute_value_id   = (!empty($data['attribute_value_id'])) ? $data['attribute_value_id'] : null;
    }
}