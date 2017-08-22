<?php
namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
use Twig;

class HomeController extends Controller{
    
    public function indexAction(){
        $this->view->setVar('routes','home');
        
    }
}