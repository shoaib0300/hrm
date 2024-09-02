<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Routing_Content_PageResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.routing.content.page_resolver' shared service.
     *
     * @return \Contao\CoreBundle\Routing\Content\PageResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/ContentUrlResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/PageResolver.php';

        return $container->privates['contao.routing.content.page_resolver'] = new \Contao\CoreBundle\Routing\Content\PageResolver(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}
