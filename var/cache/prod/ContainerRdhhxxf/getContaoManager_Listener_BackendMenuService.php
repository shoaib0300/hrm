<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoManager_Listener_BackendMenuService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_manager.listener.backend_menu' shared service.
     *
     * @return \Contao\ManagerBundle\EventListener\BackendMenuListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/manager-bundle/src/EventListener/BackendMenuListener.php';

        $a = ($container->services['security.helper'] ?? self::getSecurity_HelperService($container));

        if (isset($container->privates['contao_manager.listener.backend_menu'])) {
            return $container->privates['contao_manager.listener.backend_menu'];
        }
        $b = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['contao_manager.listener.backend_menu'])) {
            return $container->privates['contao_manager.listener.backend_menu'];
        }

        return $container->privates['contao_manager.listener.backend_menu'] = new \Contao\ManagerBundle\EventListener\BackendMenuListener($a, $b, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['translator'] ?? self::getTranslatorService($container)), false, 'contao-manager.phar.php', ($container->services['contao_manager.jwt_manager'] ?? $container->get('contao_manager.jwt_manager', 3)));
    }
}
