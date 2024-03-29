<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieFormTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\CategorieFormType' shared autowired service.
     *
     * @return \App\Form\CategorieFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CategorieFormType'] = new \App\Form\CategorieFormType(($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')));
    }
}
