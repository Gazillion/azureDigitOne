<?php

namespace ContainerTsfVD8c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppContactControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AppContactController' shared autowired service.
     *
     * @return \App\Controller\AppContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AppContactController.php';

        $container->services['App\\Controller\\AppContactController'] = $instance = new \App\Controller\AppContactController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\AppContactRepository'] ?? $container->load('getAppContactRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.HKQJjJV'] ?? $container->load('get_ServiceLocator_HKQJjJVService'))->withContext('App\\Controller\\AppContactController', $container));

        return $instance;
    }
}