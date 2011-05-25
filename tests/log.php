<?php
/**
 * This script uses the façade to perform some logging operations
 */

// autoload function for slf4php
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    include $class .".php";
});

ini_set('include_path', implode(PATH_SEPARATOR, array(
    __DIR__ .'/../lib',
    ini_get('include_path'),
)));

// set some values on our MDC
slf4php\MDC::put('some_key', 'some_value');

// log some
$logger = slf4php\LoggerFactory::getLogger('test');
$logger->isTraceEnabled();
$logger->trace('message');
$logger->isDebugEnabled();
$logger->debug('message');
$logger->isInfoEnabled();
$logger->info('message');
$logger->isWarnEnabled();
$logger->warn('message');
$logger->isErrorEnabled();
$logger->error('message');

$logger->debug('value retrieved from MDC [some_key: "' . slf4php\MDC::get('some_key') .'"]');
slf4php\MDC::clear();
$logger->debug('MDC cleared...');
$logger->debug('A copy of our MDC: ' .print_r(slf4php\MDC::getCopyOfContextMap(), true));
slf4php\MDC::setContextMap(array('some_key' => 'new_value'));
$logger->debug('new MDC map set...');
