<?php

namespace Container7pg5Ki9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8PlN4nmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8PlN4nm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8PlN4nm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rapport' => ['privates', '.errored..service_locator.8PlN4nm.App\\Entity\\Rapport', NULL, 'Cannot autowire service ".service_locator.8PlN4nm": it references class "App\\Entity\\Rapport" but no such service exists.'],
        ], [
            'rapport' => 'App\\Entity\\Rapport',
        ]);
    }
}