<?php

namespace Solman\Services;

use \Phalcon\Session\Adapter\Files;

class SessionService extends AbstractService{
    
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'session';
    
    public function init(){
        $this->di->setShared(
            $this->serviceName,
            function(){
                $session = new Files();
                
                $session->start();
                
                return $session;
            }
            );
    }
}