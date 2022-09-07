<?php

namespace ContainerPVzExlD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Classes\Cart' shared autowired service.
     *
     * @return \App\Classes\Cart
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Classes/Cart.php';

        return $container->privates['App\\Classes\\Cart'] = new \App\Classes\Cart(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}