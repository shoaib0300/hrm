<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Crawl_Escargot_FactoryService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.crawl.escargot.factory' shared service.
     *
     * @return \Contao\CoreBundle\Crawl\Escargot\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Factory.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/Subscriber/SubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/EscargotSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/EscargotAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/Subscriber/ExceptionSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/EscargotAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/escargot/src/SubscriberLoggerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/BrokenLinkCheckerSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Crawl/Escargot/Subscriber/SearchIndexSubscriber.php';

        $container->services['contao.crawl.escargot.factory'] = $instance = new \Contao\CoreBundle\Crawl\Escargot\Factory(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['contao.routing.content_url_generator'] ?? self::getContao_Routing_ContentUrlGeneratorService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), [], []);

        $a = ($container->services['translator'] ?? self::getTranslatorService($container));

        $b = new \Contao\CoreBundle\Crawl\Escargot\Subscriber\BrokenLinkCheckerSubscriber($a);

        $c = ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container));

        $b->setLogger($c);
        $d = new \Contao\CoreBundle\Crawl\Escargot\Subscriber\SearchIndexSubscriber(($container->services['contao.search.indexer'] ?? $container->load('getContao_Search_IndexerService')), $a);
        $d->setLogger($c);

        $instance->addSubscriber($b);
        $instance->addSubscriber($d);

        return $instance;
    }
}
