<?php 

namespace Solman\Services;

use Phalcon\Mvc\Dispatcher;

class DispatcherService extends AbstractService{
    
/**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'dispatcher';
    protected $defaultNamespace = 'Solman\Frontend';
    
    
    public function init(){
        $namespace = $this->defaultNamespace;
        $this->di->setShared(
            $this->serviceName,
            function() use ($namespace){ 
                $dispatcher = new Dispatcher();
               // $dispatcher->setDefaultNamespace($namespace);
                    
                return $dispatcher;
            });
    }
}