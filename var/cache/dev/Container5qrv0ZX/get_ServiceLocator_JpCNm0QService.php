<?php

namespace Container5qrv0ZX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JpCNm0QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JpCNm0Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JpCNm0Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'respuestum' => ['privates', '.errored..service_locator.JpCNm0Q.App\\Entity\\Respuesta', NULL, 'Cannot autowire service ".service_locator.JpCNm0Q": it references class "App\\Entity\\Respuesta" but no such service exists.'],
        ], [
            'respuestum' => 'App\\Entity\\Respuesta',
        ]);
    }
}