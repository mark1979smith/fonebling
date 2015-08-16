<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/16/2015
 * Time: 9:29 PM
 */

namespace Application\Model\Product;

class Device
{
    public $product_id;
    public $device_id;

    public function exchangeArray($data)
    {
        $this->product_id           = (!empty($data['product_id'])) ? $data['product_id'] : null;
        $this->device_id            = (!empty($data['device_id'])) ? $data['device_id'] : null;
    }
}