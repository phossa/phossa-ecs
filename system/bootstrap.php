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
 * load all boot files in `boot/` directory
 */
foreach(scandir(__DIR__ . '/boot') as $file) {
    if ('.' == $file || '..' == $file) {
        continue;
    }
    require __DIR__ . '/boot/' . $file;
}
