<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppFAQRepositoryService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Repository\AppFAQRepository' shared autowired service.
     *
     * @return \App\Repository\AppFAQRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AppFAQRepository'] = new \App\Repository\AppFAQRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}