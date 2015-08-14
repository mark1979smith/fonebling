<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 10:12 PM
 */

namespace Application\Model\Attributes;

class Value
{
    public $attribute_value_id;
    public $attribute_value;

    public function exchangeArray($data)
    {
        $this->attribute_value_id   = (!empty($data['attribute_value_id'])) ? $data['attribute_value_id'] : null;
        $this->attribute_value      = (!empty($data['attribute_value'])) ? $data['attribute_value'] : null;
    }
}