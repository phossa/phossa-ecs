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

/*
 * configuration for global cache object
 */
return [
    // default cache class
    'class'   => 'Phossa\\Cache\\CachePool',

    // filesystem driver
    'filesys' => [
        'class' => 'Phossa\\Cache\\Driver\\FilesystemDriver',
        'conf'  => [
            'dir_root' => getenv('PHOSSA_CACHE')
        ],
    ],
];
