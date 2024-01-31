<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieRepositoryService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Repository\CategorieRepository' shared autowired service.
     *
     * @return \App\Repository\CategorieRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->privates['App\\Repository\\CategorieRepository'])) {
            return $container->privates['App\\Repository\\CategorieRepository'];
        }

        return $container->privates['App\\Repository\\CategorieRepository'] = new \App\Repository\CategorieRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), $a);
    }
}
