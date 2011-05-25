<?php
/**
 * This script shows how slf4php can be used without any implementation.
 *
 * An E_USER_WARNING will be issued since no implementation is provided
 * in the include path.
 */

error_reporting(E_ALL);
include __DIR__ .'/log.php';
