<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 10/08/2015
 * Time: 20:25
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CollectionController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}