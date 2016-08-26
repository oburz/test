<?php

namespace ArrayHandler\Strategy;

class ImplodeStrategy extends AbstractStrategy
{
    private $data = array();

    /**
     * @param array $array
     * @return array
     */
    public function get(array $array)
    {
        return $this->process($array, '');
    }

    /**
     * @param array $array
     * @param $strKey
     * @return array
     */
    private function process(array $array, $strKey)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $key = strlen($strKey) > 0 ? $strKey . '.' . $key : $key;
                $this->process($value, $key);
            } else {
                $key = $strKey . '.' . $key;
                $this->data[$key] = $value;
            }
        }

        return $this->data;
    }

}
