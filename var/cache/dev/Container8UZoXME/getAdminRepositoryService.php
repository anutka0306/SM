<?php

namespace Container8UZoXME;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AdminRepository' shared autowired service.
     *
     * @return \App\Repository\AdminRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AdminRepository.php';

        return $container->privates['App\\Repository\\AdminRepository'] = new \App\Repository\AdminRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
