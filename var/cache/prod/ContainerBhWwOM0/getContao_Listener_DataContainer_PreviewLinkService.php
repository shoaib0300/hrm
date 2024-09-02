<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Listener_DataContainer_PreviewLinkService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.listener.data_container.preview_link' shared service.
     *
     * @return \Contao\CoreBundle\EventListener\DataContainer\PreviewLinkListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/EventListener/DataContainer/PreviewLinkListener.php';

        return $container->services['contao.listener.data_container.preview_link'] = new \Contao\CoreBundle\EventListener\DataContainer\PreviewLinkListener(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->services['security.helper'] ?? self::getSecurity_HelperService($container)), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['router'] ?? self::getRouterService($container)), ($container->services['uri_signer'] ??= new \Symfony\Component\HttpFoundation\UriSigner($container->getEnv('APP_SECRET'))), '/preview.php');
    }
}
