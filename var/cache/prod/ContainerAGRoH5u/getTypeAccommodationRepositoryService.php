<?php

namespace ContainerAGRoH5u;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeAccommodationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypeAccommodationRepository' shared autowired service.
     *
     * @return \App\Repository\TypeAccommodationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeAccommodationRepository'] = new \App\Repository\TypeAccommodationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
