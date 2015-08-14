<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/14/2015
 * Time: 10:00 PM
 */
namespace Application\Model;

class Supplier
{
    public $supplier_id;
    public $supplier_name;

    public function exchangeArray($data)
    {
        $this->supplier_id      = (!empty($data['supplier_id'])) ? $data['supplier_id'] : null;
        $this->supplier_name    = (!empty($data['supplier_name'])) ? $data['supplier_name'] : null;
    }
}