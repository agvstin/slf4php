<?php

namespace slf4php\spi;

interface LoggerFactoryBinder
{
    public function getLoggerFactory();

    public function getLoggerFactoryStr();
}
