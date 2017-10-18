<?php

/**
 * Plugin Name: Cyberworld Builders Plugin
 * Plugin URI: ''
 * Description: Cyberworld Builders custom plugin.
 * Version: 0.1
 * Author: Jay Long
 * Author URI:
 * Text Domain:
 * Domain Path:
 *
 * Copyright 2017
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

define('CYBERBUILDERS_URL', plugin_dir_url( __FILE__ ));
define('CYBERBUILDERS_PATH', plugin_dir_path( __FILE__ ));
define('CYBERBUILDERS_FILE',  'cyberworld_builders.php');
define('CYBERBUILDERS_DEV_MODE', true);

spl_autoload_register( 'cyberworld_builders' );

function cyberworld_builders($class) {

    $prefix = "CyberworldBuilders\\";
    $base_dir = __DIR__ . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

new CyberworldBuilders\Cyberworld_Builders;
