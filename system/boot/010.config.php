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
use Phossa\Phossa\Message\Message;
use Phossa\Config\Env\Environment;
use Phossa\Shared\Message\MessageAbstract;
use Phossa\Shared\Message\Loader\LanguageLoader;

/*
 * load server/host specific environment variables
 */
$envFile = getenv('PHOSSA_ROOT') . '/../.env';
if (!is_file($envFile)) {
    die(Message::get(Message::ENVFILE_NOT_FOUND, $envFile));
} else {
    (new Environment())->load($envFile);
}

/*
 * set language for error message
 */
if ('en_' != substr(getenv('PHOSSA_LANG'), 0, 3)) {
    MessageAbstract::setLoader(new LanguageLoader(getenv('PHOSSA_LANG')));
}

/*
 * set script timezone
 */
date_default_timezone_set(getenv('PHOSSA_TZ'));

/*
 * load configs
 */
$_PHOSSA['config'] = new Config(getenv('PHOSSA_CONFIG'), getenv('PHOSSA_ENV'));
