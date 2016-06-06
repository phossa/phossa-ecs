# phossa-ecs
[![Build Status](https://travis-ci.org/phossa/phossa-ecs.svg?branch=master)](https://travis-ci.org/phossa/phossa-ecs)
[![HHVM](https://img.shields.io/hhvm/phossa/phossa-ecs.svg?style=flat)](http://hhvm.h4cc.de/package/phossa/phossa-ecs)
[![Latest Stable Version](https://img.shields.io/packagist/vpre/phossa/phossa-ecs.svg?style=flat)](https://packagist.org/packages/phossa/phossa-ecs)
[![License](https://poser.pugx.org/phossa/phossa-ecs/license)](http://mit-license.org/)

**phossa-ecs** is a PHP framework skeleton for application development. It
differs from other frameworks with large scale deployment in mind, or elastic
computing in mind.

It requires PHP 5.4 and supports PHP 7.0+, HHVM. It is compliant with
[PSR-1][PSR-1], [PSR-2][PSR-2], [PSR-4][PSR-4].

[PSR-1]: http://www.php-fig.org/psr/psr-1/ "PSR-1: Basic Coding Standard"
[PSR-2]: http://www.php-fig.org/psr/psr-2/ "PSR-2: Coding Style Guide"
[PSR-4]: http://www.php-fig.org/psr/psr-4/ "PSR-4: Autoloader"

Features
--

- Uses `composer` as libraries and packages managment tool.

- Seperation of configurations from other codes.

- Seperation of local (server-wise) and shareable (cloud-wise) stuff.

- Seperation of application development and system administration.

- Seperation of public (client-wise) and system (backend) stuff.

- Seperation of application related and third party stuff.

- Seperation of varying and unvarying stuff.

Installation
---

Install via the [`composer`](https://getcomposer.org/) utility.

```
composer create-project phossa/phossa-ecs YOUR_APP_DIR 1.*
```

Usage
---

Dependencies
---

- PHP >= 5.4.0

- phossa/phossa-shared 1.*

License
---

[MIT License](http://mit-license.org/)
