<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 10:10 PM
 */
namespace Application\Model\Attributes;

class Label
{
    public $attribute_label_id;
    public $attribute_label_value;

    public function exchangeArray($data)
    {
        $this->attribute_label_id         = (!empty($data['attribute_label_id'])) ? $data['attribute_label_id'] : null;
        $this->attribute_label_value      = (!empty($data['attribute_label_value'])) ? $data['attribute_label_value'] : null;
    }
}