<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J09swGNService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j09swGN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j09swGN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'route' => ['privates', '.errored..service_locator.j09swGN.Contao\\CoreBundle\\Routing\\Page\\PageRoute', NULL, 'Cannot autowire service ".service_locator.j09swGN": it references class "Contao\\CoreBundle\\Routing\\Page\\PageRoute" but no such service exists.'],
        ], [
            'route' => 'Contao\\CoreBundle\\Routing\\Page\\PageRoute',
        ]);
    }
}
