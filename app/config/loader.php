<?php

global $config;

use Phalcon\Loader;
use Phalcon\Config\Adapter\Ini as ConfigIni;

$loader = new Loader();

//register composer vendor tapi kok gak bisa ya?
/*
 $loader->registerFiles(
 [
 ROOT_PATH.'/vendor/autoload.php'
 ]
 ) */;

$vendors = include ROOT_PATH.'/vendor/autoload.php';

$configPath = ROOT_PATH.'/app/config/config.ini';
$config = new ConfigIni($configPath);
;
//register module n class
$loader->registerNamespaces([
    'Solman' => ROOT_PATH.$config->application->main,
    'Solman\Libraries' => ROOT_PATH.$config->application->library,
    'Solman\Services' => ROOT_PATH.$config->application->services,
    'Solman\Models' => ROOT_PATH.$config->application->models,
    'Solman\Providers' => ROOT_PATH.$config->application->providers,
    'Vendor'=>ROOT_PATH.$config->application->vendors,
]   
    );
/*
 'Solman\Frontend\Controllers' => '../app/frontend/controllers/',
 'Solman\Backend\Controllers' => '../app/backend/controllers/',
 'Solman\Libraries' => '../app/libraries/',
 'Solman\Services' => '../app/services/',
 'Solman\Models' => '../app/models/',
 'Solman\Providers' => '../app/providers/',
 
 //test
 $loader->registerDirs(['../app/controllers/']);
 */

//baru dah register loadernya
$loader->register();
