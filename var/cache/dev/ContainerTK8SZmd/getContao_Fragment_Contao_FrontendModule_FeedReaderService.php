<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_FrontendModule_FeedReaderService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.frontend_module.feed_reader' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FrontendModule\FeedReaderController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/FeedReaderController.php';

        $container->services['contao.fragment._contao.frontend_module.feed_reader'] = $instance = new \Contao\CoreBundle\Controller\FrontendModule\FeedReaderController(($container->privates['contao.feed.feedio'] ?? $container->load('getContao_Feed_FeedioService')), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), ($container->services['cache.system'] ?? self::getCache_SystemService($container)));

        $a = $container->load('get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_FrontendModule_FeedReaderService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'feed_reader', 'category' => 'miscellaneous', 'template' => 'frontend_module/feed_reader', 'method' => NULL, 'renderer' => NULL, 'debugController' => 'Contao\\CoreBundle\\Controller\\FrontendModule\\FeedReaderController']);
        $instance->setContainer($a);

        return $instance;
    }
}
