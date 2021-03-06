<?php

namespace ContainerVhlkk7p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJXfVypService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZJXfVyp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZJXfVyp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\MwangejiController::TypePatient' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController::categorie' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController::oldpatient' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController::patient' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController::personne' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\MwangejiController:TypePatient' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController:categorie' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController:oldpatient' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController:patient' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'App\\Controller\\MwangejiController:personne' => ['privates', '.service_locator.36ruLYS', 'get_ServiceLocator_36ruLYSService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\MwangejiController::TypePatient' => '?',
            'App\\Controller\\MwangejiController::categorie' => '?',
            'App\\Controller\\MwangejiController::oldpatient' => '?',
            'App\\Controller\\MwangejiController::patient' => '?',
            'App\\Controller\\MwangejiController::personne' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\MwangejiController:TypePatient' => '?',
            'App\\Controller\\MwangejiController:categorie' => '?',
            'App\\Controller\\MwangejiController:oldpatient' => '?',
            'App\\Controller\\MwangejiController:patient' => '?',
            'App\\Controller\\MwangejiController:personne' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
