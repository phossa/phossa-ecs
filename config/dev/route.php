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
 * routes in dev mode
 */
return [
    'routes'   => [
        '/user[/{action:xd=list}[/{id:d=1}]]' => 'handler1'
    ],
];
