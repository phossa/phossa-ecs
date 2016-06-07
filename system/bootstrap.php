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
use Phossa\Ecs\Message\Message;
use Phossa\Config\Env\Environment;
use Phossa\Shared\Message\MessageAbstract;
use Phossa\Shared\Message\Loader\LanguageLoader;

/*
 * set autoloading
 */
require_once  '../vendor/autoload.php';

/*
 * set root directory
 */
putenv('PHOSSA_ROOT=' . dirname(__DIR__));

/*
 * load server/host specific environment variables
 */
$envFile = '../../.env';
if (!is_file($envFile)) {
    die(Message::get(Message::ENVFILE_NOT_FOUND, $envFile));
} else {
    (new Environment())->load($envFile);
}

/*
 * set default language for dev error message
 */
if ('en_US.UTF-8' != getenv('PHOSSA_LANG')) {
    MessageAbstract::setLoader(new LanguageLoader(getenv('PHOSSA_LANG')));
}

/*
 * load configs
 */
$config = new Config(getenv('PHOSSA_CONFIG'), getenv('PHOSSA_ENV'));
