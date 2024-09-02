<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTemplateController2Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\FrontendModule\TemplateController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\FrontendModule\TemplateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/TemplateController.php';

        $container->services['Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController'] = $instance = new \Contao\CoreBundle\Controller\FrontendModule\TemplateController();

        $instance->setContainer(($container->privates['.service_locator.98PWvJa'] ?? $container->load('get_ServiceLocator_98PWvJaService'))->withContext('Contao\\CoreBundle\\Controller\\FrontendModule\\TemplateController', $container));

        return $instance;
    }
}
