<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_CachedReaderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     *
     * @deprecated Since symfony/framework-bundle 6.4: The "annotations.cached_reader" service is deprecated without replacement.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '6.4', 'The "annotations.cached_reader" service is deprecated without replacement.');

        $a = ($container->privates['annotations.cache_adapter'] ?? $container->load('getAnnotations_CacheAdapterService'));

        if (isset($container->privates['annotations.cached_reader'])) {
            return $container->privates['annotations.cached_reader'];
        }

        return $container->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($container->privates['annotations.reader'] ?? $container->load('getAnnotations_ReaderService')), $a, false);
    }
}
