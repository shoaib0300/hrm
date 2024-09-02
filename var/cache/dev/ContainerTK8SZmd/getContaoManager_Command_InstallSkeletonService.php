<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoManager_Command_InstallSkeletonService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_manager.command.install_skeleton' shared service.
     *
     * @return \Contao\ManagerBundle\Command\InstallSkeletonCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/Command/InstallSkeletonCommand.php';

        $container->privates['contao_manager.command.install_skeleton'] = $instance = new \Contao\ManagerBundle\Command\InstallSkeletonCommand(\dirname(__DIR__, 4));

        $instance->setName('skeleton:install');
        $instance->setAliases(['contao:install-web-dir']);
        $instance->setDescription('Installs the skeleton files of the manager bundle.');

        return $instance;
    }
}
