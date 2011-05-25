<?php

namespace slf4php\helpers;

use slf4php\Logger;

class NOPLogger implements Logger
{

    public function isTraceEnabled()
    {
        return false;
    }

    public function trace($msg)
    {
    }

    public function isDebugEnabled()
    {
        return false;
    }

    public function debug($msg)
    {
    }

    public function isInfoEnabled()
    {
        return false;
    }

    public function info($msg)
    {
    }

    public function isWarnEnabled()
    {
        return false;
    }

    public function warn($msg)
    {
    }

    public function isErrorEnabled()
    {
        return false;
    }

    public function error($msg)
    {
    }

}
