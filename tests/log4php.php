<?php
/**
 * This script configures the log4php façade (and the logger)
 */

// bootstrap log4php
require_once 'log4php/Logger.php';
ini_set('include_path', implode(PATH_SEPARATOR, array(
    __DIR__ .'/../lib/slf4php-log4php',
)));

// configure logger
\Logger::configure(__DIR__ .'/log4php.properties');

// include log script
include __DIR__ .'/log.php';
