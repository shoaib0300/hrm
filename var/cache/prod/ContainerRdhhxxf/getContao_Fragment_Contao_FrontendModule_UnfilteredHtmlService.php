<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_FrontendModule_UnfilteredHtmlService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.fragment._contao.frontend_module.unfiltered_html' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FrontendModule\UnfilteredHtmlController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/UnfilteredHtmlController.php';

        $container->services['contao.fragment._contao.frontend_module.unfiltered_html'] = $instance = new \Contao\CoreBundle\Controller\FrontendModule\UnfilteredHtmlController();

        $a = $container->load('get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_FrontendModule_UnfilteredHtmlService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'unfiltered_html', 'category' => 'miscellaneous', 'template' => 'frontend_module/unfiltered_html', 'method' => NULL, 'renderer' => NULL, 'debugController' => 'Contao\\CoreBundle\\Controller\\FrontendModule\\UnfilteredHtmlController']);
        $instance->setContainer($a);

        return $instance;
    }
}
