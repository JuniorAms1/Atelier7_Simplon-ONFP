<?php

namespace ContainerLHLuGoX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZF_CL0OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZF.cL0O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZF.cL0O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ApprenantController::delete' => ['privates', '.service_locator.GZbJ0PU', 'get_ServiceLocator_GZbJ0PUService', true],
            'App\\Controller\\ApprenantController::edit' => ['privates', '.service_locator.GZbJ0PU', 'get_ServiceLocator_GZbJ0PUService', true],
            'App\\Controller\\ApprenantController::index' => ['privates', '.service_locator.xKo.E.B', 'get_ServiceLocator_XKo_E_BService', true],
            'App\\Controller\\ApprenantController::show' => ['privates', '.service_locator.GZbJ0PU', 'get_ServiceLocator_GZbJ0PUService', true],
            'App\\Controller\\EvaluationController::delete' => ['privates', '.service_locator.nkyaKCh', 'get_ServiceLocator_NkyaKChService', true],
            'App\\Controller\\EvaluationController::edit' => ['privates', '.service_locator.nkyaKCh', 'get_ServiceLocator_NkyaKChService', true],
            'App\\Controller\\EvaluationController::index' => ['privates', '.service_locator.tKHdKt3', 'get_ServiceLocator_TKHdKt3Service', true],
            'App\\Controller\\EvaluationController::show' => ['privates', '.service_locator.nkyaKCh', 'get_ServiceLocator_NkyaKChService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ApprenantController:delete' => ['privates', '.service_locator.GZbJ0PU', 'get_ServiceLocator_GZbJ0PUService', true],
            'App\\Controller\\ApprenantController:edit' => ['privates', '.service_locator.GZbJ0PU', 'get_ServiceLocator_GZbJ0PUService', true],
            'App\\Controller\\ApprenantController:index' => ['privates', '.service_locator.xKo.E.B', 'get_ServiceLocator_XKo_E_BService', true],
            'App\\Controller\\ApprenantController:show' => ['privates', '.service_locator.GZbJ0PU', 'get_ServiceLocator_GZbJ0PUService', true],
            'App\\Controller\\EvaluationController:delete' => ['privates', '.service_locator.nkyaKCh', 'get_ServiceLocator_NkyaKChService', true],
            'App\\Controller\\EvaluationController:edit' => ['privates', '.service_locator.nkyaKCh', 'get_ServiceLocator_NkyaKChService', true],
            'App\\Controller\\EvaluationController:index' => ['privates', '.service_locator.tKHdKt3', 'get_ServiceLocator_TKHdKt3Service', true],
            'App\\Controller\\EvaluationController:show' => ['privates', '.service_locator.nkyaKCh', 'get_ServiceLocator_NkyaKChService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ApprenantController::delete' => '?',
            'App\\Controller\\ApprenantController::edit' => '?',
            'App\\Controller\\ApprenantController::index' => '?',
            'App\\Controller\\ApprenantController::show' => '?',
            'App\\Controller\\EvaluationController::delete' => '?',
            'App\\Controller\\EvaluationController::edit' => '?',
            'App\\Controller\\EvaluationController::index' => '?',
            'App\\Controller\\EvaluationController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ApprenantController:delete' => '?',
            'App\\Controller\\ApprenantController:edit' => '?',
            'App\\Controller\\ApprenantController:index' => '?',
            'App\\Controller\\ApprenantController:show' => '?',
            'App\\Controller\\EvaluationController:delete' => '?',
            'App\\Controller\\EvaluationController:edit' => '?',
            'App\\Controller\\EvaluationController:index' => '?',
            'App\\Controller\\EvaluationController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}