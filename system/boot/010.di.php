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
 * start dependent injection container
 */
$container = new \Phossa\Di\Container(
    getenv('PHOSSA_CONFIG') . '/di.php'
);

/*
 * use $config as parameter resolver
 */
$container->setResolver($container->get('config'));
