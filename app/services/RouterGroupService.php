<?php

namespace Solman\Services;

use Phalcon\Mvc\Router\Group as RouterGroup;

class RouterGroupService{
    
    protected $routerGroup;
    protected $module;
    protected $namespace;
    protected $prefix;
    
    public function __construct($module = "",$namespace="",$prefix=""){
/* 
        if($prefix=="")
            $prefix = "/"; 
 */        
        $this->module = $module;
        $this->namespace = $namespace;
        $this->prefix = $prefix;    
    }
    
    /*
     * set route for routergroup
     * param $pattern the url pattern
     * param $path the path describing url pattern
     * */
    public function setRoute($pattern="", $path=[]){
        //set wildcard if not provided
        if($pattern == "" && empty($path)){
          
            $this->routerGroup->add('',
                [
                    'controller'=>'index',
                    'action'=>'index',
                ]);
            
            $this->routerGroup->add('/',
                [
                    'controller'=>'index',
                    'action'=>'index',
                ]);
            
            $this->routerGroup->add('/:controller',
                [
                    'controller'=>1,
                    'action'=>'index'
                ]);
            
            $this->routerGroup->add('/:controller/:action',
                [
                    'controller'=>1,
                    'action'=>2
                ]);
            
            $this->routerGroup->add('/:controller/:action/:params',
                [
                    'controller'=>1,
                    'action'=>2,
                    'params'=>3
                ]);
            
            /*
            $this->routerGroup->add('/:module/:controller/:action/:params',
                [
                    'module'=>1,
                    'controller'=>2,
                    'action'=>3,
                    'params'=>4
                ]);
            
            $this->routerGroup->add('/:module/:controller',
                [
                    'module'=>1,
                    'controller'=>2,
                    'action'=>'index'
                ]);
            
            $this->routerGroup->add('/:module',
                [
                    'module'=>1,
                    'controller'=>'index',
                    'action'=>'index'
                ]);
            */
        }
    }
    
    public function setRouterGroup(){
        $this->routerGroup = new RouterGroup();
        $this->routerGroup->setPaths([
            'module'=>$this->module
        ]);
        
        if($this->prefix!='')
            $this->routerGroup->setPrefix($this->prefix);
        
        $this->setRoute();
        
    }
    
    public function getRouterGroup(){
        return $this->routerGroup;
    }
    
    public function getPath(){
        echo $this->routerGroup->getPaths();
        return $this->routerGroup->getPaths();
    }
    
    public function getRoutes(){
        echo ($this->routerGroup->getRoutes());
        return $this->routerGroup->getRoutes();
    }
}
