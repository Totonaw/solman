<?php 
namespace Solman\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class IndexController extends Controller{
    
    public function indexAction(){
        echo 'ini frontend index';
    }
    public function testAction(){
        echo 'etst';
    }
    
    public function errorAction(){
        echo 'ada error';
    }
}