<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ErrorHandlerConfiguratorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'debug.error_handler_configurator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/ErrorHandlerConfigurator.php';

        $a = new \Monolog\Logger('php');
        $a->pushProcessor(($container->privates['contao.monolog.processor'] ?? self::getContao_Monolog_ProcessorService($container)));
        $a->pushProcessor(($container->privates['contao_manager.monolog.request_processor'] ??= new \Contao\ManagerBundle\Monolog\RequestProcessor()));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        $a->pushHandler(($container->privates['contao.monolog.handler'] ?? self::getContao_Monolog_HandlerService($container)));

        return $container->services['debug.error_handler_configurator'] = new \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator($a, NULL, 0, false, false, ($container->services['monolog.logger.deprecation'] ?? $container->load('getMonolog_Logger_DeprecationService')));
    }
}
