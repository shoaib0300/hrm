<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Cache_WarmerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.cache.warmer' shared service.
     *
     * @return \Contao\CoreBundle\Cache\ContaoCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Cache/ContaoCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->services['contao.cache.warmer'] = new \Contao\CoreBundle\Cache\ContaoCacheWarmer(($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), ($container->services['contao.resource_finder'] ?? self::getContao_ResourceFinderService($container)), ($container->services['contao.resource_locator'] ?? $container->load('getContao_ResourceLocatorService')), \dirname(__DIR__, 4), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['contao.intl.locales'] ?? self::getContao_Intl_LocalesService($container)));
    }
}
