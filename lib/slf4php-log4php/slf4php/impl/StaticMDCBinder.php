<?php

namespace slf4php\impl;

class StaticMDCBinder
{

    private static $_instance;

    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function getMDCA()
    {
        return new Log4PhpMDCAdapter;
    }

}

