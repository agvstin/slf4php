<?php

namespace slf4php\impl;

use slf4php\ILoggerFactory;

class Log4PhpLoggerFactory implements ILoggerFactory
{
    private $_map = array();

    public function getLogger($name)
    {
        if (isset($this->_map[$name])) {
            return $this->_map[$name];
        }

        if ($name == \slf4php\Logger::ROOT_LOGGER_NAME) {
            $log4php = \Logger::getRootLogger();
        } else {
            $log4php = \Logger::getLogger($name);
        }

        $logger = new Log4PhpLoggerAdapter($log4php);
        $this->_map[$name] = $logger;

        return $logger;
    }
}
