<?php 

namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
use Twig;

class IndexController extends Controller{
    
    public function indexAction(){
        echo 'ini admin index';
//         echo $this->dispatcher
        $this->view->setVar('layout','test');
        $this->view->setVar('token',$this->security->getToken());
        $this->view->setVar('tokenKey',$this->security->getTokenKey());
        if($this->request->isPost()){
            //redirect to login
            $this->dispatcher->forward(
                [
                'controller'=>'login',
                'action'=>'index'
                ]
            );
            return;
        }
//         echo $this->view->render('index.html.twig',"");
    }
    
    public function testAction(){
        echo 'ini test admin';
    }
    
    public function errorAction(){
        echo 'ada error di admin';
    }
}