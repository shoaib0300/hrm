<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_ToplinkService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.content_element.toplink' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\ToplinkController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/ToplinkController.php';

        $container->services['contao.fragment._contao.content_element.toplink'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\ToplinkController();

        $a = $container->load('get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_ContentElement_ToplinkService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'toplink', 'category' => 'links', 'template' => 'content_element/toplink', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => false, 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\ToplinkController']);
        $instance->setContainer($a);

        return $instance;
    }
}
