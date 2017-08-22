<?php 
//thanx to https://github.com/phalcon/mvc/

namespace Solman\Services;

use Phalcon\DiInterface;
use Phalcon\Mvc\User\Component;

/**
 * \Solman\Services\AbstractServiceProvider
 *
 * @package Solman\Services
 */
abstract class AbstractService extends Component implements ServiceInterface
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName;
    /**
     * AbstractServiceProvider constructor.
     *
     * @param DiInterface $di The Dependency Injector.
     */
    public function __construct(DiInterface $di)
    {
        $this->setDI($di);
    }
    /**
     * Gets the Service name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->serviceName;
    }
}