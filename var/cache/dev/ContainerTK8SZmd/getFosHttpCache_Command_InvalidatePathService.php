<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosHttpCache_Command_InvalidatePathService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'fos_http_cache.command.invalidate_path' shared service.
     *
     * @return \FOS\HttpCacheBundle\Command\InvalidatePathCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/BaseInvalidateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/PathSanityCheck.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/http-cache-bundle/src/Command/InvalidatePathCommand.php';

        $container->privates['fos_http_cache.command.invalidate_path'] = $instance = new \FOS\HttpCacheBundle\Command\InvalidatePathCommand(($container->services['fos_http_cache.cache_manager'] ?? self::getFosHttpCache_CacheManagerService($container)));

        $instance->setName('fos:httpcache:invalidate:path');

        return $instance;
    }
}
