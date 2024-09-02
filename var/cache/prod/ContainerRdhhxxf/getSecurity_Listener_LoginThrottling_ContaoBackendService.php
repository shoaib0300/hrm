<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_LoginThrottling_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'security.listener.login_throttling.contao_backend' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\LoginThrottlingListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/LoginThrottlingListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RateLimiter/RequestRateLimiterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RateLimiter/PeekableRequestRateLimiterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RateLimiter/AbstractRequestRateLimiter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RateLimiter/DefaultLoginRateLimiter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/RateLimiterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/StorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/rate-limiter/Storage/CacheStorage.php';

        $a = ($container->services['cache.rate_limiter'] ?? $container->load('getCache_RateLimiterService'));

        return $container->privates['security.listener.login_throttling.contao_backend'] = new \Symfony\Component\Security\Http\EventListener\LoginThrottlingListener(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\Security\Http\RateLimiter\DefaultLoginRateLimiter(new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 25, 'interval' => '1 minute', 'id' => '_login_global_contao_backend'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), NULL), new \Symfony\Component\RateLimiter\RateLimiterFactory(['policy' => 'fixed_window', 'limit' => 5, 'interval' => '1 minute', 'id' => '_login_local_contao_backend'], new \Symfony\Component\RateLimiter\Storage\CacheStorage($a), NULL), $container->getEnv('APP_SECRET')));
    }
}
