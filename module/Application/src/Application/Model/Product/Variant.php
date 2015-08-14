<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 10:02 PM
 */

namespace Application\Model\Product;

class Variant
{
    public $product_id;
    public $variant_id;
    public $variant_label;
    public $variant_value;
    public $variant_price;
    public $supplier_id;

    public function exchangeArray($data)
    {
        $this->product_id       = (!empty($data['product_id'])) ? $data['product_id'] : null;
        $this->variant_id       = (!empty($data['variant_id'])) ? $data['variant_id'] : null;
        $this->variant_label    = (!empty($data['variant_label'])) ? $data['variant_label'] : null;
        $this->variant_value    = (!empty($data['variant_value'])) ? $data['variant_value'] : null;
        $this->variant_price    = (!empty($data['variant_price'])) ? $data['variant_price'] : null;
        $this->supplier_id      = (!empty($data['supplier_id'])) ? $data['supplier_id'] : null;
    }
}