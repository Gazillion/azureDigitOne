<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Templating_FilterRuntimeService extends App_KernelDevContainer
{
    /*
     * Gets the private 'liip_imagine.templating.filter_runtime' shared service.
     *
     * @return \Liip\ImagineBundle\Templating\LazyFilterRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['liip_imagine.cache.manager'] ?? $container->load('getLiipImagine_Cache_ManagerService'));

        if (isset($container->privates['liip_imagine.templating.filter_runtime'])) {
            return $container->privates['liip_imagine.templating.filter_runtime'];
        }

        return $container->privates['liip_imagine.templating.filter_runtime'] = new \Liip\ImagineBundle\Templating\LazyFilterRuntime($a, NULL);
    }
}
