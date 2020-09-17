<?php

namespace Container7pg5Ki9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ExMiGaqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ExMiGaq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ExMiGaq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rapportRepository' => ['privates', 'App\\Repository\\RapportRepository', 'getRapportRepositoryService', true],
        ], [
            'rapportRepository' => 'App\\Repository\\RapportRepository',
        ]);
    }
}
