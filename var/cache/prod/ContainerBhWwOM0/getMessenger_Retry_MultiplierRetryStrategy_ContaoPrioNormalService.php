<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_MultiplierRetryStrategy_ContaoPrioNormalService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'messenger.retry.multiplier_retry_strategy.contao_prio_normal' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Retry/RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Retry/MultiplierRetryStrategy.php';

        return $container->privates['messenger.retry.multiplier_retry_strategy.contao_prio_normal'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(3, 1000, 2, 0);
    }
}
