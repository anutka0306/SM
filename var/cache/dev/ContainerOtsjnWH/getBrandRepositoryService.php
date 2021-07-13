<?php

namespace ContainerOtsjnWH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrandRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\BrandRepository' shared autowired service.
     *
     * @return \App\Repository\BrandRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'BrandRepository.php';

        return $container->privates['App\\Repository\\BrandRepository'] = new \App\Repository\BrandRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
