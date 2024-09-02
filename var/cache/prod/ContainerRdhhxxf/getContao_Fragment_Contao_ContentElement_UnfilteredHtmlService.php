<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_UnfilteredHtmlService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.fragment._contao.content_element.unfiltered_html' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\UnfilteredHtmlController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/UnfilteredHtmlController.php';

        $container->services['contao.fragment._contao.content_element.unfiltered_html'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\UnfilteredHtmlController();

        $a = $container->load('get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_ContentElement_UnfilteredHtmlService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'unfiltered_html', 'category' => 'texts', 'template' => 'content_element/unfiltered_html', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => false, 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\UnfilteredHtmlController']);
        $instance->setContainer($a);

        return $instance;
    }
}
