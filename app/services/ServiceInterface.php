<?php
namespace Solman\Services;
use Phalcon\Di\InjectionAwareInterface;
/**
 * \Solman\Services\ServiceInterface
 *
 * @package Solman\Services
 */
interface ServiceInterface extends InjectionAwareInterface
{
    /**
     * init application service.
     *
     * @return mixed
     */
    public function init();
    /**
     * Gets the Service name.
     *
     * @return string
     */
    public function getName();
}