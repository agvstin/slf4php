<?php

namespace slf4php\impl;

use slf4php\spi\LoggerFactoryBinder;

class StaticLoggerBinder implements LoggerFactoryBinder
{

    private static $_instance;

    private $_factory;
    private $_factoryStr;

    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    protected function __construct()
    {
        $this->_factory = new Log4PhpLoggerFactory;
        $this->_factoryStr = get_class($this->_factory);
    }
    public function getLoggerFactory()
    {
        return $this->_factory;
    }

    public function getLoggerFactoryStr()
    {
        return $this->_factoryStr;
    }

}

