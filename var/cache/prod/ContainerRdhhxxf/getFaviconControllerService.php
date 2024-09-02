<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFaviconControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\FaviconController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FaviconController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FaviconController.php';

        return $container->services['Contao\\CoreBundle\\Controller\\FaviconController'] = new \Contao\CoreBundle\Controller\FaviconController(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['contao.routing.page_finder'] ?? self::getContao_Routing_PageFinderService($container)), \dirname(__DIR__, 4), ($container->services['contao.cache.entity_tags'] ?? $container->load('getContao_Cache_EntityTagsService')));
    }
}
