<?php

namespace slf4php\impl;

use slf4php\spi\MDCAdapter;

class Log4PhpMDCAdapter implements MDCAdapter
{

    public function put($key, $value)
    {
        \LoggerMDC::put($key, $value);
    }

    public function get($key)
    {
        return \LoggerMDC::get($key);
    }

    public function remove($key)
    {
        \LoggerMDC::remove($key);
    }

    public function clear()
    {
         $GLOBALS['log4php.LoggerMDC.ht'] = array();
    }

    public function getCopyOfContextMap()
    {
        return $GLOBALS['log4php.LoggerMDC.ht'];
    }

    public function setContextMap($map)
    {
        $GLOBALS['log4php.LoggerMDC.ht'] = $map;
    }

}
