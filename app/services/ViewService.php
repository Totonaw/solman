<?php 

namespace Solman\Services;

use Phalcon\Mvc\View;

class ViewService extends AbstractService{
    
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'view';
    protected $defaultNamespace = 'Solman\Frontend';
    
    
    public function init(){
        $this->di->setShared(
            $this->serviceName,
            function(){
                $view = new View();
                return $view;
            }
        );
    }
}