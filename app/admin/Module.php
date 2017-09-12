<?php
namespace Solman\Admin;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;
use Phalcon\DiInterface;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Dispatcher\Exception as DispatchException;
use Phalcon\Assets\Manager as AssetsManager;
use Solman\Providers\TwigEngine;
use Solman\Services\ConfigService as Config;

class Module implements ModuleDefinitionInterface
{

    protected $defaultNamespace = 'Solman\Admin\Controllers\\';

    protected $viewPath = "";

    protected $controllerPath = "";

    /**
     * Registers the module auto-loader
     *
     * @param DiInterface $di
     */
    public function init($di)
    {

        if ($di) {
            $this->viewPath = ROOT_PATH . $di->get('config')->view->backend->views;
            $this->controllerPath = ROOT_PATH . $di->get('config')->application->backend->controllers;
        }
    }

    public function registerAutoloaders(DiInterface $di = null)
    {
        $this->init($di);
        
        $loader = new Loader();

        $loader->registerNamespaces([
            'Solman\Admin\Controllers' => $this->controllerPath
        ]);

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
        $di->set('dispatcher', function () use ($namespace) {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace($namespace);
            
            // set not found each module
            $eventsManager = new EventsManager();
            $eventsManager->attach('dispatch:beforeDispatch', function ($event, $dispatcher, $e) {
                // logger

            });
            
            $eventsManager->attach("dispatch:beforeException", function ($event, $dispatcher, $exception) {
                
		if ($exception instanceof DispatchException) {
                    $dispatcher->forward(array(
                        'controller' => 'index',
                        'action' => 'error'
                    ));
                    return false;
                }
            });
            
            $dispatcher->setEventsManager($eventsManager);
            
            return $dispatcher;
        });
        // Registering the view component
        // coba pakai twig
        $di->set('view', function () use ($di) {
            $view = new View();
            // $view->setBasePath(ROOT_PATH.'/');
            $view->registerEngines([
                TwigEngine::DEFAULT_EXTENSION => function ($view, $di) {
                    return new TwigEngine($view, $di, []);
                },
                '.volt' => function ($view, $di) {
                    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
                    $volt->setOptions(array(
                        'stat' => true,
                        'compileAlways' => true
                    ));
                    return $volt;
                }
            ]);
            $view->setViewsDir(ROOT_PATH . $di->get('config')->view->backend->views);
            $view->setLayoutsDir(ROOT_PATH . $di->get('config')->view->backend->layouts);
            // $view->setLayout('main');
            // $view->setTemplateBefore('main');
            // $view->setRenderLevel(View::LEVEL_LAYOUT);
            return $view;
        });
        
        // register assets global buat template
        $di->set('assetsGlobal', function () {
            $assets = new AssetsManager();
            $assets->collection("css")
                ->addCss('/public/css/bootstrap/bootstrap.css');
            
            $assets->collection('js')
                ->addJs("/public/components/jquery/dist/jquery.js")
                ->addJs("/public/components/datatables.net/js/jquery.dataTables.js")
                ->addJs("/public/components/react/react.js");
            
            
            return $assets;
        });
    }
}
