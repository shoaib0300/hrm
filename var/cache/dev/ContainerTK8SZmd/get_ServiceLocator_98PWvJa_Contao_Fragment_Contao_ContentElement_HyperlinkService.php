<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_98PWvJa_Contao_Fragment_Contao_ContentElement_HyperlinkService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.98PWvJa.contao.fragment._contao.content_element.hyperlink' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return ($container->privates['.service_locator.98PWvJa'] ?? $container->load('get_ServiceLocator_98PWvJaService'))->withContext('contao.fragment._contao.content_element.hyperlink', $container);
    }
}
