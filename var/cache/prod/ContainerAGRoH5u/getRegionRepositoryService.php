<?php

namespace ContainerAGRoH5u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\RegionRepository' shared autowired service.
     *
     * @return \App\Repository\RegionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\RegionRepository'] = new \App\Repository\RegionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
