<?php

define('ROOT_PATH', realpath('..') . '/');

require_once ROOT_PATH.'app/config/loader.php';

use Solman\Bootstrap;

try{
    $bootstrap = new Bootstrap();
    $bootstrap->init();
}catch(Exception $err){
    echo "Something wrong : ".$err->getMessage();
    
    echo "<pre>";
    var_dump($err);
    echo "</pre>";
}