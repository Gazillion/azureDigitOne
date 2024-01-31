<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'App\Controller\BlogController' shared autowired service.
     *
     * @return \App\Controller\BlogController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\BlogController'] = $instance = new \App\Controller\BlogController(($container->privates['App\\Repository\\BlogPostRepository'] ?? $container->load('getBlogPostRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\HistoriqueRepository'] ?? $container->load('getHistoriqueRepositoryService')), new \App\Services\UploadHelper((\dirname(__DIR__, 4).'/public/images')));

        $instance->setContainer(($container->privates['.service_locator.HKQJjJV'] ?? $container->load('get_ServiceLocator_HKQJjJVService'))->withContext('App\\Controller\\BlogController', $container));

        return $instance;
    }
}
