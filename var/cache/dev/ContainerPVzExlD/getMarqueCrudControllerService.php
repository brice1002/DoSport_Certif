<?php

namespace ContainerPVzExlD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarqueCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\MarqueCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\MarqueCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/MarqueCrudController.php';

        $container->services['App\\Controller\\Admin\\MarqueCrudController'] = $instance = new \App\Controller\Admin\MarqueCrudController();

        $instance->setContainer(($container->privates['.service_locator.wcyNGhy'] ?? $container->load('get_ServiceLocator_WcyNGhyService'))->withContext('App\\Controller\\Admin\\MarqueCrudController', $container));

        return $instance;
    }
}
