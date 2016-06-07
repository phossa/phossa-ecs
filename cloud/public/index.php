<?php

// autoloader
require_once  '../vendor/autoload.php';

// base on the servername, may load different .env here
(new Phossa\Config\Env\Environment())->load('../../.env');

// load configs
$config = new Phossa\Config\Config(
    getenv('PHOSSA_CONFIG'),    // loaded from .env file
    getenv('PHOSSA_ENV')        // loaded from .env file
);
