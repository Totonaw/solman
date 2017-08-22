<?php
use Phalcon\Di\FactoryDefault;
/*
 * Fungsi dispatcher buat multi module
 * Bisa juga buat bikin SEO, cek url pattern dll
 * Info lanjut https://olddocs.phalconphp.com/en/3.0.2/reference/dispatching.html
 * */
class Dispatcher
{

    protected $_di;

    public function __construct(DI $di){
        $this->_di = $di;
    }
    
    public function init(){
        
        $this->_di->set('dispatcher', function() {
            $dispatcher = new \Phalcon\Mvc\Dispatcher();
            $dispatcher->setDefaultNamespace('Solman\Frontend');
            return $dispatcher;
        });       
    }
}

