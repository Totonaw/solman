<?php
namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
use Twig;

class LoginController extends Controller{
    
    public function indexAction(){
       //jadiin library aj
       $this->view->setVar('token',$this->security->getToken());
       $this->view->setVar('tokenKey',$this->security->getTokenKey());
       
       $this->view->pick('index/index');
       if($this->request->isPost()){
           //check auth
           /*
           if($this->security->checkHash($this->request->getPost('password'),$password)){
           
           } 
            */
           //error back to login page with error message
           //success redirect to admin main page
           
           $this->response->redirect('admin/home')->send();
           $this->view->disable();
           
           return;
           
       }
    }
    
    public function lgAction(){
    }
    
    public function authAction(){
  
        if($this->request->isPost() && $this->request->isAjax()){
            return json_encode(['message'=>'request is post ajax']);
        }else{
            $msg = 'request is not post ajax, instead is '.$this->request->getMethod();
            $this->response->setJsonContent(['message'=>$msg]);
            return $this->response;
        }
            
    }
}