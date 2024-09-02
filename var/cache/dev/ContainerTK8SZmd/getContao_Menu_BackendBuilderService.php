<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Menu_BackendBuilderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.menu.backend_builder' shared service.
     *
     * @return \Contao\CoreBundle\Menu\BackendMenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Menu/BackendMenuBuilder.php';

        $a = ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService'));

        if (isset($container->services['contao.menu.backend_builder'])) {
            return $container->services['contao.menu.backend_builder'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->services['contao.menu.backend_builder'])) {
            return $container->services['contao.menu.backend_builder'];
        }

        return $container->services['contao.menu.backend_builder'] = new \Contao\CoreBundle\Menu\BackendMenuBuilder($a, $b);
    }
}
