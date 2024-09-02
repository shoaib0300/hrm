<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_ImageService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.content_element.image' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\ImagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/ImagesController.php';

        $container->services['contao.fragment._contao.content_element.image'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\ImagesController(($container->services['security.helper'] ?? self::getSecurity_HelperService($container)), ($container->privates['contao.filesystem.virtual.files'] ?? $container->load('getContao_Filesystem_Virtual_FilesService')), ($container->services['contao.image.studio'] ?? $container->load('getContao_Image_StudioService')), $container->parameters['contao.image.valid_extensions']);

        $a = $container->load('get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_ContentElement_ImageService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'image', 'category' => 'media', 'template' => 'content_element/image', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => false, 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\ImagesController']);
        $instance->setContainer($a);

        return $instance;
    }
}
