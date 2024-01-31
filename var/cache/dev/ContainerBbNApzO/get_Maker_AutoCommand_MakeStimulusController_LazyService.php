<?php

namespace ContainerBbNApzO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeStimulusController_LazyService extends App_KernelDevContainer
{
    /*
     * Gets the private '.maker.auto_command.make_stimulus_controller.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.maker.auto_command.make_stimulus_controller.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:stimulus-controller', [], 'Creates a new Stimulus controller', false, #[\Closure(name: 'maker.auto_command.make_stimulus_controller', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_stimulus_controller'] ?? $container->load('getMaker_AutoCommand_MakeStimulusControllerService'));
        });
    }
}
