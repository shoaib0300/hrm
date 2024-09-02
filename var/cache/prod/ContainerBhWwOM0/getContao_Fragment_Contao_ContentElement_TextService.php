<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_TextService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.fragment._contao.content_element.text' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\TextController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/TextController.php';

        $container->services['contao.fragment._contao.content_element.text'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\TextController(($container->services['contao.image.studio'] ?? $container->load('getContao_Image_StudioService')));

        $a = $container->load('get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_ContentElement_TextService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'text', 'category' => 'texts', 'template' => 'content_element/text', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => false, 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\TextController']);
        $instance->setContainer($a);

        return $instance;
    }
}
