<?php

namespace ContainerSUPxHuX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrentUserExtensionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Doctrine\CurrentUserExtension' shared autowired service.
     *
     * @return \App\Doctrine\CurrentUserExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'CurrentUserExtension.php';

        return $container->privates['App\\Doctrine\\CurrentUserExtension'] = new \App\Doctrine\CurrentUserExtension(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
