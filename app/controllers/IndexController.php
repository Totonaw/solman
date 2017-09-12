<?php 

namespace Solman\Admin\Controller;

use Phalcon\Mvc\Controller;

const TEST_1='WWWW';

class IndexController extends Controller{
    
    public function indexAction(){
        echo 'frontend index';
    }
    public function testAction(){
        echo 'etst';
    }
}