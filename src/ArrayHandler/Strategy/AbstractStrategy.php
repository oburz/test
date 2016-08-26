<?php

namespace ArrayHandler\Strategy;

abstract class AbstractStrategy
{
    /**
     * @param array $array
     * @return mixed
     */
    abstract public function get(array $array);
}
