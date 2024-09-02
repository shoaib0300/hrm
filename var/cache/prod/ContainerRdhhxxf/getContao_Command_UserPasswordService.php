<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_UserPasswordService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.command.user_password' shared service.
     *
     * @return \Contao\CoreBundle\Command\UserPasswordCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/UserPasswordCommand.php';

        $container->privates['contao.command.user_password'] = $instance = new \Contao\CoreBundle\Command\UserPasswordCommand(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->services['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));

        $instance->setName('contao:user:password');
        $instance->setDescription('Changes the password of a Contao back end user.');

        return $instance;
    }
}
