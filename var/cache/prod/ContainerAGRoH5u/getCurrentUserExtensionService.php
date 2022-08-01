<?php

namespace ContainerAGRoH5u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrentUserExtensionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Doctrine\CurrentUserExtension' shared autowired service.
     *
     * @return \App\Doctrine\CurrentUserExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Doctrine\\CurrentUserExtension'] = new \App\Doctrine\CurrentUserExtension(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
