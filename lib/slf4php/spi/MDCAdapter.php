<?php

namespace slf4php\spi;

interface MDCAdapter
{
    public function put($key, $value);
    public function get($key);
    public function remove($key);
    public function clear();
    public function getCopyOfContextMap();
    public function setContextMap($map);
}
