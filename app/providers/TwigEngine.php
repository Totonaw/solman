<?php 
//credit to vinyvicente, https://github.com/vinyvicente/phalcon-twig
namespace Solman\Providers;

use Phalcon\Mvc\View\Engine;
use Phalcon\Mvc\View\EngineInterface;
use Phalcon\DiInterface as DI;
use Twig;

class TwigEngine extends Engine implements EngineInterface{
 
    const DEFAULT_EXTENSION = '.html.twig';
    
    protected $twig;
    protected $options = [];
    public function __construct($view, DI $di, $cachedDir = false){

        parent::__construct($view,$di);
        
        if(is_string($cachedDir))
            $this->options = ['cached'=>$cached];
        
        $twigloader = new Twig\Loader\FilesystemLoader($this->getView()->getViewsDir());
        $this->twig = new Twig\Environment($twigloader,$this->options);
    }
    
    public function render($path,$params = [], $mustClean=false){
        $content = $this->twig->render(str_replace($this->getView()->getViewsDir(), '', $path), $params);
        
        if ($mustClean) {
            $this->getView()->setContent($content);
            return ;
        }
        echo $content;
    }
    
}