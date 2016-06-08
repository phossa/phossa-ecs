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

/*
 * set root directory
 */
putenv('PHOSSA_ROOT=' . dirname(dirname(__DIR__)));

/*
 * set autoloading
 */
$_PHOSSA['loader'] = require getenv('PHOSSA_ROOT') . '/vendor/autoload.php';
