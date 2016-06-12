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

use Phossa\Config\Config;
use Phossa\Config\Cache\Cache;

/*
 * start configure
 */
$_PHOSSA['config'] = new Config(
    // config directory
    getenv('PHOSSA_CONFIG'),
    // current env
    getenv('PHOSSA_ENV'),
    // config file type
    'php',
    // config cache
    new Cache(getenv('PHOSSA_CACHE'))
);
