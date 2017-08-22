<?php

namespace Solman\Services;

use Phalcon\Config\Adapter\Ini as ConfigIni;

class ConfigService extends AbstractService{
    
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'config';
    
    public function init(){
        $this->di->setShared(
            $this->serviceName,
            function(){
                $file = ROOT_PATH.'/app/config/config.ini';
                $config = "";
                if(file_exists($file)){
                    $config = new ConfigIni($file);
                }
                return $config;
            }
            );
    }
}