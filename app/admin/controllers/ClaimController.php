<?php
namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class ClaimController extends Controller{
    
    public function indexAction(){
        
        $this->assets->addJs('/js/admin/claim/main.js');
        $this->view->setVar('routes','claim');
    }
    
    public function newAction(){
       
        $this->view->setVar('routes','claim');
        if($this->request->isPost()){
            
            $this->response->redirect('admin/claim')->send();
            $this->view->disable();
        }
    }
    
    public function getDataAction(){
        $data = [
            [
            'date'=>'1/1/0001',
            'projectId'=>'1',
            'description'=>'testing data claim',
            'claimType'=>'1',
            'status'=>'Approved',
            'action'=>""
            ],
            [
                'date'=>'1/1/0001',
                'projectId'=>'2',
                'description'=>'testing data claim 2',
                'claimType'=>'1',
                'status'=>'Approved',
                'action'=>""
            ],
            [
                'date'=>'1/3/0001',
                'projectId'=>'3',
                'description'=>'testing data claim 3',
                'claimType'=>'1',
                'status'=>'Pending',
                'action'=>""
            ]
        ];
        
        return json_encode($data);
    }
}