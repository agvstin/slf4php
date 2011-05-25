<?php

namespace slf4php\helpers;

use slf4php\ILoggerFactory;

class NOPFallbackFactory implements ILoggerFactory
{

    private static $loggerInstance = null;

    public function getLogger($name)
    {
        if (null === self::$loggerInstance) {
            self::$loggerInstance = new NOPLogger;
        }

        return self::$loggerInstance;
    }

}
