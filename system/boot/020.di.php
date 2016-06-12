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

use Phossa\Di\Container;

/*
 * start dependent injection container
 */
$_PHOSSA['di'] = (new Container(
    $_PHOSSA['config']->get('di')
))->setResolver($_PHOSSA['config']);
