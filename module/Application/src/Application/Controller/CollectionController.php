<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 10/08/2015
 * Time: 20:25
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Stdlib\ArrayObject;
use Zend\View\Model\ViewModel;

class CollectionController extends AbstractActionController
{
    public function indexAction()
    {
        $products = new ArrayObject();
        $products->append(new ArrayObject([
            'title' => 'This is a product title',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius auctor erat a placerat.
                    Nunc congue, lacus id commodo blandit, ex tortor blandit orci, nec euismod nisl lectus a sapien.
                    Vivamus porta neque vel finibus ullamcorper. Donec tincidunt mi quis auctor convallis. Nullam
                    imperdiet nisl.',
            'price_excl_shipping' => 9.99,
            'shipping_price' => 1.24,
            'price_incl_shipping' => (9.99+1.24),
            'attributes' => [
                'colour' => 'Black',
                'type' => 'Charger',
                'bundle' => 'N'
            ]
        ]));
        $products->append(new ArrayObject([
            'title' => 'This is a product title',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius auctor erat a placerat.
                    Nunc congue, lacus id commodo blandit, ex tortor blandit orci, nec euismod nisl lectus a sapien.
                    Vivamus porta neque vel finibus ullamcorper. Donec tincidunt mi quis auctor convallis. Nullam
                    imperdiet nisl.',
            'price_excl_shipping' => 8.99,
            'shipping_price' => 0.99,
            'price_incl_shipping' => (8.99+0.99),
            'attributes' => [
                'colour' => 'Grey',
                'type' => 'Screen Protector',
                'bundle' => 'N'
            ]
        ]));
        $products->append(new ArrayObject([
            'title' => 'This is a product title',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius auctor erat a placerat.
                    Nunc congue, lacus id commodo blandit, ex tortor blandit orci, nec euismod nisl lectus a sapien.
                    Vivamus porta neque vel finibus ullamcorper. Donec tincidunt mi quis auctor convallis. Nullam
                    imperdiet nisl.',
            'price_excl_shipping' => 12.5,
            'shipping_price' => 0,
            'price_incl_shipping' => 12.5,
            'attributes' => [
                'colour' => 'Black',
                'type' => 'Case',
                'bundle' => 'N'
            ]
        ]));
        $products->append(new ArrayObject([
            'title' => 'This is a product title',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius auctor erat a placerat.
                    Nunc congue, lacus id commodo blandit, ex tortor blandit orci, nec euismod nisl lectus a sapien.
                    Vivamus porta neque vel finibus ullamcorper. Donec tincidunt mi quis auctor convallis. Nullam
                    imperdiet nisl.',
            'price_excl_shipping' => 11.35,
            'shipping_price' => 1.00,
            'price_incl_shipping' => (11.35+1),
            'attributes' => [
                'colour' => 'Orange',
                'type' => 'Case,Charger',
                'bundle' => 'Y'
            ]
        ]));


        return new ViewModel(compact('products'));
    }
}