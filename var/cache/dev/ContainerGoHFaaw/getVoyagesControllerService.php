<?php

namespace ContainerGoHFaaw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVoyagesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VoyagesController' shared autowired service.
     *
     * @return \App\Controller\VoyagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'VoyagesController.php';

        $container->services['App\\Controller\\VoyagesController'] = $instance = new \App\Controller\VoyagesController(($container->privates['App\\Repository\\VisiteRepository'] ?? $container->load('getVisiteRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\VoyagesController', $container));

        return $instance;
    }
}
