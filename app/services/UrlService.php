<?php

namespace Solman\Services;

use Phalcon\Mvc\Url;

class UrlService extends AbstractService{
    
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'url';
    
    protected $routerGroup = [];
    protected $listModules = [];
    
    public function init(){
       $this->di->setShared(
            $this->serviceName,
            function() {
                $url = new Url();

                $url->setBaseUri('/');
				return $url;
            });
        
    }   
}
