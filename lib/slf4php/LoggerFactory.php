<?php

namespace slf4php;

final class LoggerFactory
{

    private static $factory = null;

    public static function getLogger($name)
    {
        if (is_object($name)) {
            $name = $this->_getClassName($name);
        }
        $factory = self::_getILoggerFactory();

        return $factory->getLogger($name);
    }

    private static function _getILoggerFactory()
    {
        if (null === self::$factory) {
            self::_initialize();
        }

        return self::$factory;
    }

    private static function _initialize()
    {
        if (!@class_exists('slf4php\impl\StaticLoggerBinder')) {
            trigger_error('No slf4php implementation found', E_USER_WARNING);
            self::$factory = new helpers\NOPFallbackFactory();
        } else {
            self::$factory = \slf4php\impl\StaticLoggerBinder::getInstance()
                ->getLoggerFactory();
        }
    }

    private static function _getClassName($object)
    {
        return str_replace(NAMESPACE_SEPARATOR, '.', get_class($object));
    }

}
