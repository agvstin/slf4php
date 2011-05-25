<?php

namespace slf4php;

interface Logger
{
    const ROOT_LOGGER_NAME = 'ROOT';

    public function isTraceEnabled();
    public function trace($msg);

    public function isDebugEnabled();
    public function debug($msg);

    public function isInfoEnabled();
    public function info($msg);

    public function isWarnEnabled();
    public function warn($msg);

    public function isErrorEnabled();
    public function error($msg);

}
