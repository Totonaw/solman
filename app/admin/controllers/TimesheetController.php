<?php
namespace Solman\Admin\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class TimesheetController extends Controller{
    
    public function indexAction(){
        
        $this->view->setVar('routes','timesheet');
    }
    
}
    