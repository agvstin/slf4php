<?php

namespace slf4php;

interface ILoggerFactory
{
    public function getLogger($name);
}
