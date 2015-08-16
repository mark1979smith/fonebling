<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/15/2015
 * Time: 9:24 PM
 */

namespace Application\View\Helper;

use Zend\Json\Json;
use Zend\View\Helper\AbstractHelper;

class ProductType extends AbstractHelper
{
    public function getTypes()
    {
        $data = [
            'Screen Protector',
            'Charger',
            'Case'
        ];

        return $data;

    }
}