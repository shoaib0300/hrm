<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTableControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\ContentElement\TableController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\TableController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/TableController.php';

        $container->services['Contao\\CoreBundle\\Controller\\ContentElement\\TableController'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\TableController();

        $instance->setContainer(($container->privates['.service_locator.98PWvJa'] ?? $container->load('get_ServiceLocator_98PWvJaService'))->withContext('Contao\\CoreBundle\\Controller\\ContentElement\\TableController', $container));

        return $instance;
    }
}
