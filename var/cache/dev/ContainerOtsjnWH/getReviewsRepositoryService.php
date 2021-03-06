<?php

namespace ContainerOtsjnWH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewsRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ReviewsRepository' shared autowired service.
     *
     * @return \App\Repository\ReviewsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ReviewsRepository.php';

        return $container->privates['App\\Repository\\ReviewsRepository'] = new \App\Repository\ReviewsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
