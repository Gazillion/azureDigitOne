<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogPostEditFormTypeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'App\Form\BlogPostEditFormType' shared autowired service.
     *
     * @return \App\Form\BlogPostEditFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\BlogPostEditFormType'] = new \App\Form\BlogPostEditFormType(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
