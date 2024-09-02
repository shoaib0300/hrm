<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Security_SwitchUserService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.security.switch_user' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Security\SwitchUserListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Security/SwitchUserListener.php';

        $a = ($container->services['monolog.logger.contao.access'] ?? $container->load('getMonolog_Logger_Contao_AccessService'));

        if (isset($container->privates['contao.listener.security.switch_user'])) {
            return $container->privates['contao.listener.security.switch_user'];
        }

        return $container->privates['contao.listener.security.switch_user'] = new \Contao\CoreBundle\EventListener\Security\SwitchUserListener(($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $a);
    }
}
