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
        // cache for config
        'config_cache' => [
            'class' => [
                // class name
                'Phossa\\Config\\Cache\\Cache',
                // cache directory
                [getenv['PHOSSA_TMPDIR'] . '/cache']
            ]
        ],

        // global config object
        'config' => [
            'class' => [
                // class name
                'Phossa\\Config\\Config',
                // constructor parameters
                [
                    getenv('PHOSSA_CONFIG'), getenv('PHOSSA_ENV'),
                    'php', '@config_cache@'
                ]
            ],
        ],
    ],
];
