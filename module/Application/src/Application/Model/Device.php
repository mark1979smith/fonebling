<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 8/16/2015
 * Time: 9:26 PM
 */

namespace Application\Model;

class Device
{
    public $device_id;
    public $device_manufacture;
    public $device_model;

    public function exchangeArray($data)
    {
        $this->device_id            = (!empty($data['device_id'])) ? $data['device_id'] : null;
        $this->device_manufacture   = (!empty($data['device_manufacture'])) ? $data['device_manufacture'] : null;
        $this->device_model         = (!empty($data['device_model'])) ? $data['device_model'] : null;
    }
}