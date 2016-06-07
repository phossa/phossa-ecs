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
use Phossa\Shared\Message\MessageAbstract;
use Phossa\Shared\Message\Loader\LanguageLoader;

/*
 * set autoloading
 */
require_once  '../vendor/autoload.php';

/*
 * set app root
 */
putenv('PHOSSA_ROOT=' . dirname(__DIR__));

/*
 * load environment
 */
$envFile = '../../.env';
if (!is_file($envFile)) {
    die(Message::get(Message::ENVFILE_NOT_FOUND, $envFile));
} else {
    (new Phossa\Config\Env\Environment())->load($envFile);
}

/*
 * set default language for dev error message
 */
if ('en_US.UTF-8' != getenv('PHOSSA_LANG')) {
    MessageAbstract::setLoader(new LanguageLoader(getenv('PHOSSA_LANG')));
}

/*
 * load app configs
 */
$config = new Phossa\Config\Config(
    getenv('PHOSSA_CONFIG'),    // loaded from .env file
    getenv('PHOSSA_ENV')        // loaded from .env file
);
