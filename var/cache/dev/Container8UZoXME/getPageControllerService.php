<?php

namespace Container8UZoXME;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PageController' shared autowired service.
     *
     * @return \App\Controller\PageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PageController.php';

        $container->services['App\\Controller\\PageController'] = $instance = new \App\Controller\PageController(($container->privates['App\\Repository\\ContentRepository'] ?? $container->getContentRepositoryService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService')), ($container->privates['App\\Repository\\PriceModelRepository'] ?? $container->getPriceModelRepositoryService()));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\PageController', $container));

        return $instance;
    }
}
