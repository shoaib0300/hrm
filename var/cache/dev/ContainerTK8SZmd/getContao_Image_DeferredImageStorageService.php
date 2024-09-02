<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Image_DeferredImageStorageService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.image.deferred_image_storage' shared service.
     *
     * @return \Contao\Image\DeferredImageStorageFilesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/DeferredImageStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/image/src/DeferredImageStorageFilesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->privates['contao.image.deferred_image_storage'] = new \Contao\Image\DeferredImageStorageFilesystem((\dirname(__DIR__, 3).'/deferred-images'), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()));
    }
}
