<?php

namespace ContainerRdhhxxf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xxy2XMy_Contao_Fragment_Contao_ContentElement_DownloadService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private '.service_locator.Xxy2XMy.contao.fragment._contao.content_element.download' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return ($container->privates['.service_locator.Xxy2XMy'] ?? $container->load('get_ServiceLocator_Xxy2XMyService'))->withContext('contao.fragment._contao.content_element.download', $container);
    }
}
