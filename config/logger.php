<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa\PACKAGE
 * @copyright 2015 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

use Phossa\Logger\LogLevel;

/*
 * configuration for logger
 */
return [
    // default logger class
    'class'   => 'Phossa\\Logger\\Logger',

    // default logging channel (name)
    'channel' => 'phossa-logger',

    // syslog handler stuff
    'syslog'  => [
        'class'   => 'Phossa\\Logger\\Handler\\SyslogHandler',
        'ident'   => 'phossa-log',
        'level'   => LogLevel::WARNING
    ],
];
