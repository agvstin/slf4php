<?php

namespace slf4php\impl;

use slf4php\Logger;

class Log4PhpLoggerAdapter implements Logger
{
    private $_logger;

    public function __construct(\Logger $logger)
    {
        $this->_logger = $logger;
    }

    public function isTraceEnabled()
    {
        return $this->isDebugEnabled();
    }

    public function trace($msg)
    {
        $this->_logger->debug($msg);
    }

    public function isDebugEnabled()
    {
        return $this->_logger->isDebugEnabled();
    }

    public function debug($msg)
    {
        $this->_logger->debug($msg);
    }

    public function isInfoEnabled()
    {
        return $this->_logger->isInfoEnabled();
    }

    public function info($msg)
    {
        $this->_logger->info($msg);
    }

    public function isWarnEnabled()
    {
       return $this->_logger->isEnabledFor(\LoggerLevel::getLevelWarn());
    }

    public function warn($msg)
    {
        $this->_logger->warn($msg);
    }

    public function isErrorEnabled()
    {
       return $this->_logger->isEnabledFor(\LoggerLevel::getLevelError());
    }

    public function error($msg)
    {
        $this->_logger->error($msg);
    }

}
