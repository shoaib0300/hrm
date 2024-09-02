<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVideoControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Contao\CoreBundle\Controller\ContentElement\VideoController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\VideoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/VideoController.php';

        $container->services['Contao\\CoreBundle\\Controller\\ContentElement\\VideoController'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\VideoController(($container->services['contao.image.studio'] ?? $container->load('getContao_Image_StudioService')));

        $instance->setContainer(($container->privates['.service_locator.98PWvJa'] ?? $container->load('get_ServiceLocator_98PWvJaService'))->withContext('Contao\\CoreBundle\\Controller\\ContentElement\\VideoController', $container));

        return $instance;
    }
}
