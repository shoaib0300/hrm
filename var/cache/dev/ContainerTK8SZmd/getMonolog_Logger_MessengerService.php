<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_MessengerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.logger.messenger' shared service.
     *
     * @return \Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.messenger'] = $instance = new \Monolog\Logger('messenger');

        $instance->pushProcessor(($container->privates['contao.monolog.processor'] ?? self::getContao_Monolog_ProcessorService($container)));
        $instance->pushProcessor(($container->privates['contao_manager.monolog.request_processor'] ??= new \Contao\ManagerBundle\Monolog\RequestProcessor()));
        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        $instance->pushHandler(($container->privates['contao.monolog.handler'] ?? self::getContao_Monolog_HandlerService($container)));
        ($container->privates['debug.debug_logger_configurator'] ?? self::getDebug_DebugLoggerConfiguratorService($container))->pushDebugLogger($instance);

        return $instance;
    }
}
