<?php

namespace slf4php;

class MDC
{

    private static $_mdcAdapter = null;

    private static function _loadMDCAdapter()
    {
        if (null !== self::$_mdcAdapter)
            return;

        if (@class_exists('slf4php\impl\StaticMDCBinder')) {
            self::$_mdcAdapter = \slf4php\impl\StaticMDCBinder::getInstance()->getMDCA();
        } else {
            self::$_mdcAdapter = new \slf4php\helpers\NOPMDCAdapter;
        }
    }
    
    public static function put($key, $value)
    {
        self::_loadMDCAdapter();

        self::$_mdcAdapter->put($key, $value);
    }

    public static function get($key)
    {
        self::_loadMDCAdapter();

        return self::$_mdcAdapter->get($key);
    }

    public static function remove($key)
    {
        self::_loadMDCAdapter();

        return self::$_mdcAdapter->remove($key);
    }

    public static function clear()
    {
        self::_loadMDCAdapter();

        return self::$_mdcAdapter->clear();
    }

    public static function getCopyOfContextMap()
    {
        self::_loadMDCAdapter();

        return self::$_mdcAdapter->getCopyOfContextMap();
    }

    public static function setContextMap($map)
    {
        self::_loadMDCAdapter();

        return self::$_mdcAdapter->setContextMap($map);
    }
}
