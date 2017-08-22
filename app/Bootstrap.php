<?php
namespace Solman;

use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;
use Solman\Services\ServiceInterface;

class Bootstrap extends Application
{

    protected $di;

    protected $services;

    public function __construct()
    {
        $this->di = new FactoryDefault();
        $listServices = include '../app/config/services.php';
        if (is_array($listServices)) {
            $this->initServices($listServices);
        }
        $listModules = include '../app/config/modules.php';
        if(is_array($listModules)){
          
            $this->registerMultiModules($listModules);
        }
        $this->setDi($this->di);
    }

    /*
     * initialize service
     */
    private function initServices(array $services)
    {
        foreach ($services as $name => $class) {
            $this->initializeService(new $class($this->di));
        }
    }

    /**
     * Initialize the Service in the Dependency Injector Container.
     *
     * @param ServiceProviderInterface $serviceProvider
     *
     * @return $this
     */
    private function initializeService(ServiceInterface $serviceProvider)
    {
        $serviceProvider->init();
        $this->services[$serviceProvider->getName()] = $serviceProvider;
        return $this;
    }

    /*
     * register multi modules
     */
    private function registerMultiModules(array $modules = [])
    {
       $this->registerModules($modules);
    }

    public function init()
    {
        $this->handle()->send();
    }

}