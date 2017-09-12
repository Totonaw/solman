<?php

namespace Solman\Frontend;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;
use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Dispatcher\Exception as DispatchException;

class Module implements ModuleDefinitionInterface
{
    protected $defaultNamespace = 'Solman\Frontend\Controllers\\';
    
    /**
     * Registers the module auto-loader
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();
        $loader->registerNamespaces(
            [
                'Solman\Frontend\Controllers' => '../apps/frontend/controllers/',
                'Solman\Frontend\Models'      => '../apps/frontend/models/',
            ]
            );
        $loader->register();
    }
    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di)
    {
        $namespace = $this->defaultNamespace;
        // Registering a dispatcher
        $di->set('dispatcher', function () use($namespace) {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace($namespace);
            //set not found each module
            $eventsManager = new EventsManager();
            $eventsManager->attach('dispatch:beforeDispatch',
                
                function($event, $dispatcher,$e){
                   
                    //logger
                }
            );
           
            $eventsManager->attach("dispatch:beforeException",
                function($event, $dispatcher, $exception) {
                   
                    if ($exception instanceof DispatchException) {
                        $dispatcher->forward(array(
                            'controller' => 'index',
                            'action'     => 'error'
                        ));
                        return false;
                    }
                    
                });
            
            $dispatcher->setEventsManager($eventsManager);
            
            return $dispatcher;
        });
            // Registering the view component
            $di->set('view', function () {
                $view = new View();
                $view->setViewsDir('../public/view/frontend/');
                
                return $view;
            });
    }
}