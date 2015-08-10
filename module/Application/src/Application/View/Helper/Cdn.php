<?php
/**
 * Created by PhpStorm.
 * User: mark.smith
 * Date: 10/08/2015
 * Time: 12:13
 */

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class Cdn extends AbstractHelper
{

    public function basePath($path = null)
    {
        return 'http://static.fonebling.co.uk' . $path;
    }


}