<?php

namespace ContainerIPbO84Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\OrderType' shared autowired service.
     *
     * @return \App\Form\OrderType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\OrderType'] = new \App\Form\OrderType();
    }
}
