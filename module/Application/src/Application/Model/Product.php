<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 9:58 PM
 */

namespace Application\Model;

/**
 * Class Product
 * The main product class
 * @package Application\Model
 */
class Product
{
    public $product_id;
    public $product_title;

    public function exchangeArray($data)
    {
        $this->product_id       = (!empty($data['product_id'])) ? $data['product_id'] : null;
        $this->product_title    = (!empty($data['product_title'])) ? $data['product_title'] : null;
    }
}