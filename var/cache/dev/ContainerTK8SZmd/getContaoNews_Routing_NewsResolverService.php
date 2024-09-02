<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNews_Routing_NewsResolverService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_news.routing.news_resolver' shared service.
     *
     * @return \Contao\NewsBundle\Routing\NewsResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Routing/Content/ContentUrlResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/Routing/NewsResolver.php';

        return $container->privates['contao_news.routing.news_resolver'] = new \Contao\NewsBundle\Routing\NewsResolver(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}
