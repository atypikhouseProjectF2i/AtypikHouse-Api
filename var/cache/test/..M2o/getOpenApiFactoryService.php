<?php

namespace ContainerZzRPI4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpenApiFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\OpenApi\OpenApiFactory' shared autowired service.
     *
     * @return \App\OpenApi\OpenApiFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'OpenApi'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'OpenApiFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'OpenApi'.\DIRECTORY_SEPARATOR.'OpenApiFactory.php';

        return $container->privates['App\\OpenApi\\OpenApiFactory'] = new \App\OpenApi\OpenApiFactory(($container->privates['App\\OpenApi\\OpenApiFactory.inner'] ?? $container->load('getOpenApiFactory_InnerService')));
    }
}
