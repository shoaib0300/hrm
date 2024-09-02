<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Filesystem_Virtual_FilesService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.filesystem.virtual.files' shared service.
     *
     * @return \Contao\CoreBundle\Filesystem\VirtualFilesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystemInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Filesystem/VirtualFilesystem.php';

        $a = ($container->privates['contao.filesystem.virtual_factory'] ?? $container->load('getContao_Filesystem_VirtualFactoryService'));

        if (isset($container->privates['contao.filesystem.virtual.files'])) {
            return $container->privates['contao.filesystem.virtual.files'];
        }

        return $container->privates['contao.filesystem.virtual.files'] = $a->__invoke('files', false);
    }
}
