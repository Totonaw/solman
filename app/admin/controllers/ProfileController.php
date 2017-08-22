<?php
namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class ProfileController extends Controller{
    
    public function indexAction(){
        
        $this->view->setVar('routes','profile');
    }
    
    public function editAction(){
        $this->view->setVar('routes','profile');
        if($this->request->isPost()){
            
            $this->response->redirect('admin/profile')->send();
            $this->view->disable();
        }
    }
}