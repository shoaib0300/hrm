<?php

namespace ContainerTK8SZmd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1Au3X34_Contao_Fragment_Contao_ContentElement_MarkdownService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1Au3X34.contao.fragment._contao.content_element.markdown' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return ($container->privates['.service_locator.1Au3X34'] ?? $container->load('get_ServiceLocator_1Au3X34Service'))->withContext('contao.fragment._contao.content_element.markdown', $container);
    }
}
