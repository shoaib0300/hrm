<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_EnumOptionsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.listener.data_container.enum_options' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\EnumOptionsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/EnumOptionsListener.php';

        return $container->services['contao.listener.data_container.enum_options'] = new \Contao\CoreBundle\EventListener\DataContainer\EnumOptionsListener(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
