<?php

namespace Container0tixcf1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_36ruLYSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.36ruLYS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.36ruLYS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            '_manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            '_manager' => '?',
        ]);
    }
}
