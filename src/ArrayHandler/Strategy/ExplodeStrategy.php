<?php

namespace ArrayHandler\Strategy;

class ExplodeStrategy extends AbstractStrategy
{
    private $data = array();

    /**
     * @param array $array
     * @return array
     */
    public function get(array $array)
    {
        foreach ($array as $key => $value) {
            $keys = explode('.', $key);
            $this->process($this->data, $keys, $value);
        }

        return $this->data;

    }

    /**
     * @param array $context
     * @param array $keys
     * @param $value
     * @return mixed
     */
    private function process(array &$context, array $keys, $value)
    {
        $key = array_shift($keys);

        if (count($keys) === 0) {
            return $context[$key] = $value;
        }

        if (!array_key_exists($key, $context)) {
            $context[$key] = [];
        }

        return $this->process($context[$key], $keys, $value);
    }
}
