<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Messenger_MessageListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao.messenger.message_listener' shared service.
     *
     * @return \Contao\CoreBundle\Messenger\EventListener\MessageListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Messenger/EventListener/MessageListener.php';

        return $container->privates['contao.messenger.message_listener'] = new \Contao\CoreBundle\Messenger\EventListener\MessageListener(($container->services['monolog.logger.contao.error'] ?? self::getMonolog_Logger_Contao_ErrorService($container)));
    }
}
