<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_Menu_BackendLogoutService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.listener.menu.backend_logout' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\Menu\BackendLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/Menu/BackendLogoutListener.php';

        $a = ($container->services['security.helper'] ?? self::getSecurity_HelperService($container));

        if (isset($container->privates['contao.listener.menu.backend_logout'])) {
            return $container->privates['contao.listener.menu.backend_logout'];
        }
        $b = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['contao.listener.menu.backend_logout'])) {
            return $container->privates['contao.listener.menu.backend_logout'];
        }

        return $container->privates['contao.listener.menu.backend_logout'] = new \Contao\CoreBundle\EventListener\Menu\BackendLogoutListener($a, $b, ($container->services['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container)), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
