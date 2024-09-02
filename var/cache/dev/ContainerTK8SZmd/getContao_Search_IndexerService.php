<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Search_IndexerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.search.indexer' shared service.
     *
     * @return \Contao\CoreBundle\Search\Indexer\DelegatingIndexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Search/Indexer/IndexerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Search/Indexer/DelegatingIndexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Search/Indexer/DefaultIndexer.php';

        $container->services['contao.search.indexer'] = $instance = new \Contao\CoreBundle\Search\Indexer\DelegatingIndexer();

        $instance->addIndexer(new \Contao\CoreBundle\Search\Indexer\DefaultIndexer(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), false));

        return $instance;
    }
}
