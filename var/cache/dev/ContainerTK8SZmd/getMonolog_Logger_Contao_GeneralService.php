<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_Contao_GeneralService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'monolog.logger.contao.general' shared service.
     *
     * @return \Contao\CoreBundle\Monolog\SystemLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Monolog\Logger('contao.general');
        $a->pushProcessor(($container->privates['contao.monolog.processor'] ?? self::getContao_Monolog_ProcessorService($container)));
        $a->pushProcessor(($container->privates['contao_manager.monolog.request_processor'] ??= new \Contao\ManagerBundle\Monolog\RequestProcessor()));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        $a->pushHandler(($container->privates['contao.monolog.handler'] ?? self::getContao_Monolog_HandlerService($container)));
        ($container->privates['debug.debug_logger_configurator'] ?? self::getDebug_DebugLoggerConfiguratorService($container))->pushDebugLogger($a);

        return $container->services['monolog.logger.contao.general'] = new \Contao\CoreBundle\Monolog\SystemLogger($a, 'GENERAL');
    }
}
