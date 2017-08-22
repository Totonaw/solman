<?php

use Solman\Services;

return [
    Solman\Services\ConfigService::class,
    Solman\Services\DispatcherService::class,
    Solman\Services\ViewService::class,
    Solman\Services\RouterService::class,
    Solman\Services\SessionService::class,
    Solman\Services\UrlService::class,
];

/*
use Phalcon\Di\FactoryDefault as DI;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Router;

class ServicesSolman{
    
    protected $_di;
    
    public function __construct(DI $di){
        $this->_di = $di;
        $this->init();
    }
    
    public function init(){
        //bisa jg set by array di['view'] = function()...
        $this->_di->set('view',
            function(){
                $view = new View();
                $view->setViewsDir('./public/views');
                return $view;
            });
        /*
        
        $this->_di->set('router',
            function(){
                $router = new Router();
                $router->add('/:namespace/:controller',[
                    'namespace'=>'Solman/Controllers',
                    'controller'=>'index',
                    'action'=>'test',
                ]);
                return $router;
            });
        
    }
}*/

