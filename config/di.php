<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa\Ecs
 * @author    Hong Zhang <phossa@126.com>
 * @copyright 2016 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

return [
    'services' => [
        // logger
        'logger' => [
            'class' => [
                '${logger.class}',
                ['${logger.channel}', ['@logger_syslog_handler@']],
            ],
        ],
        'logger_syslog_handler' => [
            'class' => [
                '${logger.syslog.class}',
                ['${logger.syslog.ident}', '${logger.syslog.level}']
            ],
        ],
    ],
];
