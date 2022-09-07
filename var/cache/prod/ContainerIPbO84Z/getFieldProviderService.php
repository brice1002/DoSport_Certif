<?php

namespace ContainerIPbO84Z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
