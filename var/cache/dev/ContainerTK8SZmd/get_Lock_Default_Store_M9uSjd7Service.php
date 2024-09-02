<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Lock_Default_Store_M9uSjd7Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.lock.default.store.m9uSjd7' shared service.
     *
     * @return \Symfony\Component\Lock\PersistingStoreInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/PersistingStoreInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/lock/Store/StoreFactory.php';

        return $container->privates['.lock.default.store.m9uSjd7'] = \Symfony\Component\Lock\Store\StoreFactory::createStore('flock');
    }
}
