<?php
    /**
     * Created by PhpStorm.
     * User: mark.smith
     * Date: 18/08/2015
     * Time: 14:08
     */

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class Navigation extends AbstractHelper
{
    protected $productSet;

    public function setProducts(\ArrayObject $product_set)
    {
        $this->productSet = $product_set;

        return $this;

    }

    public function productTypes()
    {
        $data_view_helper = $this->getView()->plugin('Data');
        $product_type_view_helper = $this->getView()->plugin('ProductType');
        
        foreach($product_type_view_helper->getTypes() as $product_type) :
            if ($data_view_helper->doesValueExist($this->productSet, '[0-9]+.type', $data_view_helper->sanitize($product_type))) :

                $regexp = '[0-9]+.attributes.'. $data_view_helper->sanitize($product_type) .'.'. $data_view_helper->getSanitizeRegexp(false);
                $li = array();
                $nav_elements = $data_view_helper->getKeysMatching($this->productSet, $regexp);
                foreach($nav_elements as $key => $value) :
                    if (($key % 2) == 0) :
                        $string = '';
                    endif;
                    $string .= $data_view_helper->getKeyValue($this->productSet, $value);
                    if (($key % 2) == 0) :
                        $string .= ': ';
                    endif;
                    if (($key % 2) <> 0) :
                        $li[] = $string;
                    endif;
                endforeach;

                echo '<strong>', $product_type, '</strong>';
                echo '<ul>';


                echo '<li>All ', $product_type, 's</li>';

                foreach(array_count_values($li) as $value => $count) :
                    echo '<li>', $value, ' (', $count, ')</li>';
                endforeach;

                echo '</ul>';
            endif;

        endforeach;
    }
}