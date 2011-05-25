<?php

namespace slf4php\helpers;

use slf4php\spi\MDCAdapter;

class NOPMDCAdapter implements MDCAdapter
{

    public function put($key, $value)
    {
    }

    public function get($key)
    {
        return null;
    }

    public function remove($key)
    {
    }

    public function clear()
    {
    }

    public function getCopyOfContextMap()
    {
        return null;
    }

    public function setContextMap($map)
    {
    }

}
