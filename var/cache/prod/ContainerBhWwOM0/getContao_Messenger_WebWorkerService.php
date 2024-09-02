<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Messenger_WebWorkerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.messenger.web_worker' shared service.
     *
     * @return \Contao\CoreBundle\Messenger\WebWorker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Messenger/WebWorker.php';

        $a = ($container->privates['console.command.messenger_consume_messages'] ?? $container->load('getConsole_Command_MessengerConsumeMessagesService'));

        if (isset($container->privates['contao.messenger.web_worker'])) {
            return $container->privates['contao.messenger.web_worker'];
        }

        return $container->privates['contao.messenger.web_worker'] = new \Contao\CoreBundle\Messenger\WebWorker(($container->services['cache.app'] ?? $container->load('getCache_AppService')), $a, ['contao_prio_high', 'contao_prio_normal', 'contao_prio_low'], 'PT10M');
    }
}
