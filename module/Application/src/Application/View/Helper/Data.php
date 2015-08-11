<?php
/**
 * Created by PhpStorm.
 * User: mark.smith
 * Date: 11/08/2015
 * Time: 12:35
 */

namespace Application\View\Helper;

use Zend\Json\Json;
use Zend\Stdlib\ArrayObject;
use Zend\View\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @param ArrayObject $data
     * @param null $key
     * @return string
     * @throws \Exception
     */
    public function asJsonArray(ArrayObject $data, $key = null)
    {

        if (is_null($data)) {
            return Json::encode($data);
        }

        $build = [];
        foreach($data as $k => $value) {
            if ($data instanceof ArrayObject) {
                foreach($value as $c => $d) {
                    if (strcasecmp($c, $key) === 0) {
                        $build[] = $d;
                    }
                }
            } else if (strcasecmp($k, $key) === 0) {
                $build[] = $value;
            }
        }

        return Json::encode($build);
    }
}