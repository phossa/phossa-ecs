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

use Phossa\Phossa\Message\Message;
use Phossa\Config\Env\Environment;
use Phossa\Shared\Message\MessageAbstract;
use Phossa\Shared\Message\Loader\LanguageLoader;

/*
 * set root dir
 */
putenv('PHOSSA_ROOT=' . dirname(dirname(__DIR__)));

/*
 * set autoloading
 */
require_once getenv('PHOSSA_ROOT') . '/vendor/autoload.php';

/*
 * load environment variables
 */
$envFile = getenv('PHOSSA_ROOT') . '/../.env';
if (!is_file($envFile)) {
    die(Message::get(Message::ENVFILE_NOT_FOUND, $envFile));
} else {
    (new Environment())->load($envFile);
}

/*
 * set error message language
 */
if ('en_' != substr(getenv('PHOSSA_LANG'), 0, 3)) {
    MessageAbstract::setLoader(new LanguageLoader(getenv('PHOSSA_LANG')));
}

/*
 * set script timezone
 */
date_default_timezone_set(getenv('PHOSSA_TZ'));
