<?php

namespace Solman\Services;

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;
use Solman\Library\SolmanArray as ArrayLib;

class RouterService extends AbstractService{
    
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'router';
    
    protected $routerGroup = [];
    protected $listModules = [];
    
    public function init(){
        $this->getListModules();
        $this->initGroup();
        $routerGroup = $this->routerGroup;
        $listModules = $this->listModules;
        $this->di->setShared(
            $this->serviceName,
            function() use($routerGroup,$listModules){
                $router = new Router();

                //hilangin // diakhir url
                $router->removeExtraSlashes(true);
//                $router->setDefaultController('index');
//                $router->setDefaultAction('index');
                
                $router->setDefaultModule('frontend');
               
//                 masih bingung dng group
                foreach($routerGroup as $key=>$group){
                    $router->mount($group);
//                     break;
                   // $group->getPath()."<br/>";
                }
                foreach($listModules as $key=>$detail){
                  /*
                    $router->add('/:module/:controller/:action/:params',
                        [
                            'module'=>$detail['url_prefix'],
                            'controller'=>1,
                            'action'=>2
                        ]
                        );
                    
                    $router->add('/:module/:controller',
                        [
                            'module'=>$detail['url_prefix'],
                            'controller'=>1,
                            'action'=>'index'
                        ]
                        );
                    $router->add('/:module',
                        [
                            'module'=>$detail['url_prefix'],
                            'controller'=>'index',
                            'action'=>'index'
                        ]
                        );
                    */
                }            
                return $router;
            });
        
    }
    
    protected function getListModules(){
        $listModules = include '../app/config/modules.php';
        $this->listModules = $listModules;

        return $this->listModules;
    }
    
    private function initGroup(){
        //define list modules
        $listModules = ($this->listModules);
        
        foreach($listModules as $modulesName=>$details){            
            array_push(
                    $this->routerGroup,  
                    $this->registerGroup($modulesName,$details)
                );
        }
    }
    
    private function registerGroup( $modules="", $details){
        
        $namespace ="";$prefix = "";
        
        foreach($details as $detail=>$value){
            switch($detail){
                case  'className' : $namespace = $value;break;
                case  'url_prefix': $prefix = $value;break;
                default           :break;
            }
        }

        $routerGroup = new RouterGroupService($modules,$namespace,$prefix);
        $routerGroup->setRouterGroup();
        return $routerGroup->getRouterGroup();
    }
    
}
