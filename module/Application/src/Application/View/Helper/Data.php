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
use \RecursiveIteratorIterator as RecursiveIteratorIterator;
use \RecursiveArrayIterator as RecursiveArrayIterator;

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

        $dot_notation_array = $this->asDotNotationArray($data);

        foreach(array_keys($dot_notation_array) as $array_key) {
            if (preg_match('/^'. $key .'/', $array_key, $matches)) {
                $matching_value = $dot_notation_array[$matches[0]];
                if (stristr($matching_value, ',') === false) {
                    $build[] = $matching_value;
                } else {
                    $matching_values = array_map('trim', explode(',', $matching_value));
                    foreach($matching_values as $matching_value) {
                        array_push( $build, $matching_value );
                    }
                }
            }
        }

        return Json::encode($build);
    }

    /**
     * Transform an ArrayObject into a normal array
     * @param ArrayObject $data
     * @return array
     */
    public function asArray(ArrayObject $data)
    {
        $build = $data->getArrayCopy();

        foreach($build as $key => $value) {
            if ($value instanceof ArrayObject) {
                $build[$key] = $value->getArrayCopy();
            }
        }

        return $build;
    }

    /**
     * Transform multidimensional array to flat array with the keys using dot notation
     * @param ArrayObject $data
     * @link http://stackoverflow.com/questions/10424335/php-convert-multidimensional-array-to-2d-array-with-dot-notation-keys#answer-10424516
     *
     * @return array
     */
    public function asDotNotationArray(ArrayObject $data)
    {

        $iterator = new RecursiveIteratorIterator(
            new RecursiveArrayIterator(
                $this->asArray($data)
            )
        );

        $result = array();

        foreach ($iterator as $leafValue) {

            $keys = array();

            foreach (range(0, $iterator->getDepth()) as $depth) {

                $keys[] = $iterator->getSubIterator($depth)->key();

            }

            $result[ join('.', $keys) ] = $leafValue;

        }

        return $result;
    }
}
