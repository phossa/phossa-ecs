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
 * Get/set configuration for $name
 *
 * @param  string $name
 * @param  string|array|null $value
 * @param  string|array|null configuration
 * @access public
 */
function config(/*# string */ $name, $value = null)
{
    global $_PHOSSA;
    if (isset($_PHOSSA['config'])) {
        /* @var $config ConfigInterface */
        $config = $_PHOSSA['config'];

        // get or set
        if (null === $value) {
            return $config->get($name);
        } else {
            $config->set($name, $value);
        }
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
function retrieve(/*# string */ $name)
{
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
