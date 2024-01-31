<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'App\Controller\UserController' shared autowired service.
     *
     * @return \App\Controller\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\UserController'] = $instance = new \App\Controller\UserController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['App\\Repository\\RoleRepository'] ?? $container->load('getRoleRepositoryService')), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.HKQJjJV'] ?? $container->load('get_ServiceLocator_HKQJjJVService'))->withContext('App\\Controller\\UserController', $container));

        return $instance;
    }
}
