<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Menu_BackendFavoritesService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.listener.menu.backend_favorites' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Menu\BackendFavoritesListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendFavoritesListener.php';

        $a = ($container->services['security.helper'] ?? self::getSecurity_HelperService($container));

        if (isset($container->privates['contao.listener.menu.backend_favorites'])) {
            return $container->privates['contao.listener.menu.backend_favorites'];
        }
        $b = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['contao.listener.menu.backend_favorites'])) {
            return $container->privates['contao.listener.menu.backend_favorites'];
        }
        $c = ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container));

        if (isset($container->privates['contao.listener.menu.backend_favorites'])) {
            return $container->privates['contao.listener.menu.backend_favorites'];
        }

        return $container->privates['contao.listener.menu.backend_favorites'] = new \Contao\CoreBundle\EventListener\Menu\BackendFavoritesListener($a, $b, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $c, ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['contao.csrf.token_manager'] ?? self::getContao_Csrf_TokenManagerService($container)));
    }
}
