<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_ContaoFailureService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport.contao_failure' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Receiver/ReceiverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SenderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/PhpSerializer.php';

        $a = ($container->privates['messenger.transport_factory'] ?? $container->load('getMessenger_TransportFactoryService'));

        if (isset($container->privates['messenger.transport.contao_failure'])) {
            return $container->privates['messenger.transport.contao_failure'];
        }

        return $container->privates['messenger.transport.contao_failure'] = $a->createTransport('doctrine://default?table_name=tl_message_queue&queue_name=failure&auto_setup=false', ['transport_name' => 'contao_failure'], ($container->privates['messenger.transport.native_php_serializer'] ??= new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer()));
    }
}
