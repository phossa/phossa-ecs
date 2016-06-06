<?php

// autoloader
$cloudDir = dirname(__DIR__);
require_once  $cloudDir . '/vendor/autoloader.php';

// load environment
(new Phossa\Config\Env\Environment())->load(dirname($cloudDir) . '/.env');

// load configs
$config = new Phossa\Config\Config(
    getenv('PHOSSA_CONFIG'),    // loaded from .env file
    getenv('PHOSSA_ENV')        // loaded from .env file
);
