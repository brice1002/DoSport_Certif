<?php

namespace ContainerIPbO84Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchVACTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\SearchVACType' shared autowired service.
     *
     * @return \App\Form\SearchVACType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\SearchVACType'] = new \App\Form\SearchVACType();
    }
}
