<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_UndoOperationService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.data_container.undo_operation' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\Undo\UndoOperationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/Undo/UndoOperationListener.php';

        return $container->services['contao.listener.data_container.undo_operation'] = new \Contao\CoreBundle\EventListener\DataContainer\Undo\UndoOperationListener(($container->services['security.helper'] ?? self::getSecurity_HelperService($container)));
    }
}
