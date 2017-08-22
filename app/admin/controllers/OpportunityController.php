<?php
namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class OpportunityController extends Controller{
    
    public function initialize(){
        $this->view->setVar('routes','opt');
    }
    
    public function indexAction(){
        
        
    }
    
    public function newAction(){
        
    }
    
    public function getDataAction(){
        $data = [
            [
               'date'=>'1/1/0001',
               'client'=>'Client A',
               'projectId'=>"Project 1",
               'time'=>'2d',
               'totalTime'=>'30d',
               'task'=>'task 1',
               'onSite'=>'Y'
            ],
            [
                'date'=>'1/2/0001',
                'client'=>'Client A',
                'projectId'=>"Project 2",
                'time'=>'2d',
                'totalTime'=>'10d',
                'task'=>'task 1',
                'onSite'=>'Y'
            ]
        ];
        
        return json_encode($data);
    }
}
