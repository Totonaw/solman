<?php

namespace Solman\Services;

use Phalcon\Config\Adapter\Ini;
use Phalcon\Di;
use Phalcon\Db\Adapter\Pdo\Factory;

class DbAdapterService extends AbstractService{

    protected $defaultNamespace = "DbAdapterService";
    protected $namespace = "test";

}

