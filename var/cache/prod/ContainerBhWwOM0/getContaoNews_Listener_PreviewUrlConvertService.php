<?php

namespace ContainerBhWwOM0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNews_Listener_PreviewUrlConvertService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao_news.listener.preview_url_convert' shared service.
     *
     * @return \Contao\NewsBundle\EventListener\PreviewUrlConvertListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/EventListener/PreviewUrlConvertListener.php';

        $a = ($container->services['contao.routing.content_url_generator'] ?? self::getContao_Routing_ContentUrlGeneratorService($container));

        if (isset($container->privates['contao_news.listener.preview_url_convert'])) {
            return $container->privates['contao_news.listener.preview_url_convert'];
        }

        return $container->privates['contao_news.listener.preview_url_convert'] = new \Contao\NewsBundle\EventListener\PreviewUrlConvertListener(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), $a);
    }
}
