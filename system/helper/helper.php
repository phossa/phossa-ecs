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

use Phossa\Di\ContainerInterface;
use Phossa\Config\ConfigInterface;

/*
 * abbr functions
 */

/**
 * Get current configuration for $name
 *
 * @param  string $name
 * @param  string|array|null configuration
 * @access public
 */
function C(/*# string */ $name) {
    global $_PHOSSA;
    if (isset($_PHOSSA['config'])) {
        /* @var $config ConfigInterface */
        $config = $_PHOSSA['config'];
        return $config->get($name);
    }
    return null;
}

/**
 * Retrieve object from DI container by name
 *
 * @param  string $name
 * @param  object|null
 * @access public
 */
function O(/*# string */ $name) {
    global $_PHOSSA;
    if (isset($_PHOSSA['di'])) {
        /* @var $di ContainerInterface */
        $di = $_PHOSSA['di'];
        if ($di->has($name)) {
            return $di->get($name);
        }
    }
    return null;
}
