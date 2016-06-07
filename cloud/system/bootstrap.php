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

use Phossa\Ecs\Message\Message;

/*
 * set autoloading
 */
require_once  '../vendor/autoload.php';

/*
 * load environment
 */
$envFile = '../../.envx';
if (!is_file($envFile)) {
    die(Message::get(Message::ENVFILE_NOT_FOUND, $envFile));
} else {
    (new Phossa\Config\Env\Environment())->load($envFile);
}

// load configs
$config = new Phossa\Config\Config(
    getenv('PHOSSA_CONFIG'),    // loaded from .env file
    getenv('PHOSSA_ENV')        // loaded from .env file
);
